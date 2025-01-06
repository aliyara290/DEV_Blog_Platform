<?php

require __DIR__ . "/../models/Article.php";
class Article {
    public static function createNewArticle() {
        if(isset($_POST["create_article"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                "title" => $_POST["new_post_title"],
                "slug" => $_POST["new_post_title"],
                "content" => $_POST["new_post_title"],
                "featuredImage" => $_POST["article__cover"]
            ];

            Articles::createArticle($data);  
            echo "sec";

        } else {
            echo "failed";
        }
    }
}