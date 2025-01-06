<?php 

require __DIR__ .  "/../models/Category.php";

class Category {
    public static function addNewCategory() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $categoryName = $_POST["category__name"];
            Categories::createCatgory($categoryName);
        }
    }

    public static function showAllCategories() {
        $getCategories = Categories::readAllCatgories();
        return $getCategories;
    }

    public static function countAllCategories() {
        $count = Categories::countCatgories();
        return $count;
    }
}