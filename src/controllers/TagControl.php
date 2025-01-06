<?php 

require __DIR__ . "/../models/Tag.php";

class Tag {
    public static function addNewTag() {
        if (!isset($_POST["update"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["tag__name"])) {
                $tagName = $_POST["tag__name"];
                Tags::createTag($tagName);
            } else {
                echo "tagName not fond";
            }
        }
    }

    public static function updateOldTag() {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['new_tag-name'])) {
                $newTagName = $_POST['new_tag-name'];
                $id = $_POST['tagId'];
                Tags::updateTag($id, $newTagName);
                header("location: /deV.io/src/views/admin/tags.php");  
            } else {
                echo "tagName not fond";
            }
        }
    }

    public static function showTagById($id) {
        $getTag = Tags::readTagById($id);
        return $getTag;
    }
    public static function showAllTags() {
        $getTags = Tags::readAllTags();
        return $getTags;
    }

    public static function countAllTags() {
        $count = Tags::countTags();
        return $count;
    }
}
