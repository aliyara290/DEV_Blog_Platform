<?php
require __DIR__ . "/../models/Article.php";

class ArticleController
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new Article();
    }

    public function createArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['create_article'])) {
                $title = $_POST['new_post_title'];
                $slug = strtolower(preg_replace('/[^\p{L}\p{N}]/u', '-', $title));
                $content = $_POST['art__content-d'];
                $categoryId = $_POST['category_id'];
                $authorId = $_POST["author__id"];
                $tags = $_POST['artcl__tags'];
                
                $featuredImage = null;
                if (isset($_FILES['featuredImage']) && $_FILES['featuredImage']['error'] === UPLOAD_ERR_OK) {
                    $uploadDir = '../../uploads/';
                    $filename = uniqid();
                    move_uploaded_file($_FILES['featuredImage']['tmp_name'], $uploadDir . $filename);
                    $featuredImage = $uploadDir . $filename;
                }  
        
                $this->articleModel->create($title, $slug, $content, $categoryId, $authorId, $featuredImage, $tags);
                header("location: /DEV.io/src/views/front/index.php");
            }
           
            
        
        }    
    }

    public function displayAllArticles($status) {
        return $this->articleModel->getArticles($status);
    }

    public function displayArticleById() {
        if(isset($_GET["slug"]) && $_GET["action"] == "read") {
            $postId = $_GET["slug"];
            return $this->articleModel->getArticleById($postId);
        }
    }
    public function acceptSpecificArticle() {
        if(isset($_GET['artcId']) && $_GET["action"] == "accept") {
            $artId = $_GET["artcId"];
            $this->articleModel->acceptArticle($artId);
            header("location: /deV.io/src/views/admin/articles.php");
        }
    }
    public function getAllTags() {
        return $this->articleModel->displayAllTags();
    }

    public function getAllCategories() {
        return $this->articleModel->displayAllCategories();
    }

    public function updateArticle()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["upd_post_title"])) {
            $articleId = $_POST["articleId"];
            $title = $_POST["upd_post_title"];
            $content = $_POST["upd__content-d"];
            $categoryId = $_POST["new_category_id"];
            $tags = $_POST["new_artcl_tags"] ?? [];
            $slug = strtolower(preg_replace('/[^\p{L}\p{N}]+/u', '-', $title));
            $slug = trim($slug, '-');

            $featuredImage = null;
            if (isset($_FILES['upd_featuredImage']) && $_FILES['upd_featuredImage']['error'] === UPLOAD_ERR_OK) {
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (in_array($_FILES['upd_featuredImage']['type'], $allowedTypes)) {
                    $uploadDir = '../../uploads/';
                    $filename = uniqid() . '_' . basename($_FILES['upd_featuredImage']['name']);
                    if (move_uploaded_file($_FILES['upd_featuredImage']['tmp_name'], $uploadDir . $filename)) {
                        $featuredImage = $uploadDir . $filename;
                    } 
                } 
            }
            $result = $this->articleModel->updateArticle($articleId, $title, $slug, $content, $categoryId, $tags, $featuredImage);
            if($result) {
                header("location: /deV.io/src/views/front/article.php?action=read&slug=" . $slug);
            }
        }
    }

    public function countArticles() {
        if(isset($_GET["slug"]) && $_GET["action"] == "read") {
            $slug = $_GET["slug"];
            return $this->articleModel->updateViewsCount($slug);
        }
    }

    public function displayTopFivePosts() {
        return $this->articleModel->topFivePost();
    }

    public function searchForPosts($query) {
        if (empty($query)) {
            return [];
        }
    
        return $this->articleModel->searchForArticle($query); // Call the model to fetch results
    }
    
    public function deleteArticle()
    {
        if (isset($_GET["action"]) && isset($_GET["action"]) == "deleteArticle") {
            $articleId = $_GET["articleId"];
            $this->articleModel->deleteArticle($articleId);
        } 

    }
    

    
}
$ob = new ArticleController();
$ob->createArticle();
$ob->updateArticle();
$ob->deleteArticle();
$ob->countArticles();

$tags = $ob->getAllTags();
$categories = $ob->getAllCategories();
$articles = $ob->displayAllArticles("pending");
$articlesActive = $ob->displayAllArticles("active");
$acceptArticles = $ob->acceptSpecificArticle();
$articlePost = $ob->displayArticleById();
$topFive = $ob->displayTopFivePosts();