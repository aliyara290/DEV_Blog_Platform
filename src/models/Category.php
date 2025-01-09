<?php 

require __DIR__ . "/../core/Crud.php";

class Category {
    public function createCategory($value) {
        return Crud::create("categories", ["categoryName" => $value]);
    }
    public function updateCategory($id, $value) {
        return Crud::update("categories", ["tagName" => $value], "id", $id);
    }
    public function deleteCategory($id) {
        return Crud::delete("categories", "categoryId", $id);
    }
    public function readAllCatgories() {
        return Crud::readAll("categories");
    }
    public function countCatgories() {
        return Crud::count("categories");
    }
}