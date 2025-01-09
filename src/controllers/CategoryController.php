<?php 

require __DIR__ .  "/../models/Category.php";

class CategoryController {
    private $CategoryInstance;

    public function __construct() {
        $this->CategoryInstance = new Category();
    }

    public function addNewCategory() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $categoryName = $_POST["category__name"];
            $this->CategoryInstance->createCategory($categoryName);
        }
    }

    public  function updateOldCategory() {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['new_category-name'])) {
                $newCategoryName = $_POST['new_category-name'];
                $id = $_POST['catId'];
                $this->CategoryInstance->updateCategory($id, $newCategoryName);
                header("location: /deV.io/src/views/admin/categories.php");  
            }
        }
    }

    public function showAllCategories() {
        return $this->CategoryInstance->readAllCatgories();
    }

    public function countAllCategories() {
        return $this->CategoryInstance->countCatgories();
       
    }

    public function deleteCategory() {
        if (isset($_GET["action"]) && $_GET["action"] == "deleteCategory") {
            $uId = $_GET["catId"];
            $this->CategoryInstance->deleteCategory($uId);
        }
    }
}

$categoryIns = new CategoryController();
$categoryIns->addNewCategory();
$categoryIns->updateOldCategory();
$categoryIns->deleteCategory();
$categories = $categoryIns->showAllCategories();
$total = $categoryIns->countAllCategories();