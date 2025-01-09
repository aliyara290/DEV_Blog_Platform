<?php

require __DIR__ . "/../../config/db.php";
class Article
{
    private $pdo;

    public function __construct()
    {
       $database = Database::getInstance();
       $this->pdo = $database->getConnection();
    }

    public function create($title, $slug, $content, $categoryId, $authorId, $featuredImage, $tags = [])
    {
        $sql = "INSERT INTO articles (title, slug, content, categoryId, authorId, featuredImage) 
                  VALUES (:title, :slug, :content, :categoryId, :authorId, :featuredImage)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':title' => $title,
            ':slug' => $slug,
            ':content' => $content,
            ':categoryId' => $categoryId,
            ':authorId' => $authorId,
            ':featuredImage' => $featuredImage
        ]);

        $articleId = $this->pdo->lastInsertId();

        foreach ($tags as $tagId) {
            $this->addTagToArticle($articleId, $tagId);
        }
        return $articleId;
    }

    public function getArticles($status)
    {
        $sql = "SELECT a.*, c.categoryName, u.firstName, u.picture, u.lastName, 
                   GROUP_CONCAT(t.tagName) AS tags
            FROM articles a
            JOIN categories c ON a.categoryId = c.categoryId
            JOIN users u ON a.authorId = u.id
            LEFT JOIN articleTag at ON a.articleId = at.articleId
            LEFT JOIN tags t ON at.tagId = t.tagId
            WHERE a.status = :status
            GROUP BY a.articleId
            ORDER BY a.createdAt DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":status" => $status]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($slug)
    {
        $sql = "SELECT a.*, c.categoryName, u.firstName, u.joined, u.picture, u.lastName, 
                   GROUP_CONCAT(t.tagName) AS tags
            FROM articles a
            JOIN categories c ON a.categoryId = c.categoryId
            JOIN users u ON a.authorId = u.id
            LEFT JOIN articleTag `at` ON a.articleId = `at`.articleId
            LEFT JOIN tags t ON `at`.tagId = t.tagId
            WHERE a.slug = :slug
            GROUP BY a.articleId
            ORDER BY a.createdAt DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':slug' => $slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateArticle($articleId, $title, $slug, $content, $categoryId, $tags = [], $featuredImage = null)
{
    try {
        $sql = "UPDATE articles 
                SET featuredImage = :featuredImage, title = :title, slug = :slug, content = :content, categoryId = :categoryId
                WHERE articleId = :articleId";
        $stmt = $this->pdo->prepare($sql);

        $result = $stmt->execute([
            ':featuredImage' => $featuredImage,
            ':title' => $title,
            ':slug' => $slug,
            ':content' => $content,
            ':categoryId' => $categoryId,
            ':articleId' => $articleId
        ]);

        $this->removeTagsFromArticle($articleId);
        foreach ($tags as $tagId) {
            $this->addTagToArticle($articleId, $tagId);
        }
        return $result;
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        return false;
    }
}

    public function acceptArticle($articleId) {
        $sql = "UPDATE articles SET status = 'active' WHERE articleId = :articleId";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':articleId' => $articleId]);
    }

    private function addTagToArticle($articleId, $tagId)
    {
        $sql = "INSERT INTO articleTag (articleId, tagId) VALUES (:articleId, :tagId)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':articleId' => $articleId, ':tagId' => $tagId]);
    }

    private function removeTagsFromArticle($articleId)
    {
        $sql = "DELETE FROM articleTag WHERE articleId = :articleId";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':articleId' => $articleId]);
    }

    public function displayAllTags() {
        $sql = "SELECT * FROM tags";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function displayAllCategories() {
        $sql = "SELECT * FROM categories";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateViewsCount($slug) {
        $sql = "UPDATE articles SET views = views + 1 WHERE slug = :slug";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":slug" => $slug
        ]);
        return true;
    }

    public function topFivePost() {
        $sql = "SELECT * FROM articles ORDER BY views DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchForArticle($query) {
        // Adding wildcard for partial match
        $sql = "SELECT * FROM articles WHERE title LIKE :query OR content LIKE :query ORDER BY views DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":query" => '%' . $query . '%' 
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function deleteArticle($articleId)
    {
        $sql = "DELETE FROM articles WHERE articleId = :articleId";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':articleId' => $articleId]);
    }
}

