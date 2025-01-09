<?php 

require __DIR__  . "/../../config/db.php";
// require __DIR__  . "/../core/Crud.php";

class Profile {
    private $pdo;
    public function __construct() {
        $database = Database::getInstance();
       $this->pdo = $database->getConnection();
    }
    
    public function showUserProfile($id) {
        $sql = "SELECT * FROM users where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":id" => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUserProfile($id, $firstName, $lastName, $userName, $email, $picture = null,  $bio = null, $website = null, $work = null) {
        $sql = "UPDATE users 
                SET firstName = :firstName, 
                    lastName = :lastName, 
                    bio = :bio, 
                    picture = :picture, 
                    website = :website, 
                    work = :work, 
                    userName = :userName, 
                    email = :email 
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $data = [
            ":firstName" => $firstName,
            ":lastName" => $lastName,
            ":bio" => $bio,
            ":picture" => $picture,
            ":website" => $website,
            ":work" => $work,
            ":userName" => $userName,
            ":email" => $email,
            ":id" => $id
        ];
    
        $stmt->execute($data);
        return true;
    }
    
    
    public function showUserArticles($id) {
        $sql = "SELECT a.*, c.categoryName, u.firstName, u.picture, u.lastName, 
                   GROUP_CONCAT(t.tagName) AS tags
            FROM articles a
            JOIN categories c ON a.categoryId = c.categoryId
            JOIN users u ON a.authorId = u.id
            LEFT JOIN articleTag `at` ON a.articleId = `at`.articleId
            LEFT JOIN tags t ON `at`.tagId = t.tagId
            WHERE a.authorId = :id && a.status = :st
            GROUP BY a.articleId
            ORDER BY a.createdAt DESC;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":id" => $id,
            ":st" => "active"
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