<?php 

require __DIR__ . "/../models/Tag.php";

class TagController {
    private $tagInstance;
    public function __construct() {
        $this->tagInstance = new Tag();
    }
    public function addNewTag() {
        if (!isset($_POST["update"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["tag__name"])) {
                $tagName = $_POST["tag__name"];
                $this->tagInstance->createTag($tagName);
            } else {
                echo "tagName not fond";
            }
        }
    }

    public  function updateOldTag() {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['new_tag-name'])) {
                $newTagName = $_POST['new_tag-name'];
                $id = $_POST['tagId'];
                $this->tagInstance->updateTag($id, $newTagName);
                header("location: /deV.io/src/views/admin/tags.php");  
            } else {
                echo "tagName not fond";
            }
        }
    }
    public function showTagById($id) {
        return $this->tagInstance->readTagById($id);
    }
    public function showAllTags() {
        return $this->tagInstance->readAllTags();
    }
    public function countAllTags() {
       return $this->tagInstance->countTags();
    }
    public function deleteTag() {
        if (isset($_GET["action"]) && $_GET["action"] == "deleteTag") {
            $uId = $_GET["tagId"];
            $this->tagInstance->deleteTag($uId);
        }
    }
}

$tagIns = new TagController();
$tagIns->addNewTag();
$tagIns->deleteTag();
$tags = $tagIns->showAllTags();
$total = $tagIns->countAllTags();