<?php 

require __DIR__ . "/../core/Crud.php";

class Categories {
    public static function createCatgory($value) {
        return Crud::create("categories", ["categoryName" => $value]);
    }
    public static function updateCategory($id) {
        return Crud::update("categories", $column, "id", $id);
    }
    public static function deleteCategory($id) {
        return Crud::delete("categories", $column, $id);
    }
    public static function readAllCatgories() {
        return Crud::readAll("categories");
    }
    public static function countCatgories() {
        return Crud::count("categories");
    }
}