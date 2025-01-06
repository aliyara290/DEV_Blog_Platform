<?php 
require __DIR__ . "/../../config/db.php";

class Articles {

    private static $pdo;

    public function __construct() {
        $database = Database::getInstance();
        self::$pdo = $database->getConnection();
    }

    public static function createArticle($data) {
        try {
           
            if (!self::$pdo) {
                $database = Database::getInstance();
                self::$pdo = $database->getConnection();
            }

            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data['title'])));
            $sql = "INSERT INTO articles (title, slug, content, featuredImage) VALUES (:title, :slug, :content, :featuredImage)";
            $params = [
                ":title" => $data["title"],
                ":slug" => $slug,
                ":content" => $data["content"],
                ":featuredImage" => $data["featuredImage"],
            ];
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute($params);

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function displayAllTags() {

    }
}
