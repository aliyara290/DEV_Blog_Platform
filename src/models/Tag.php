<?php 
require __DIR__ . "/../core/Crud.php";

class Tags {
    public static function createTag($value) {
        return Crud::create("tags", ["tagName" => $value]);
    }
    public static function updateTag($id, $value) {
        return Crud::update("tags", ["tagName" => $value], "tagId", $id);
    }
    public static function deleteTag($id) {
        return Crud::delete("tags", $column, $id);
    }
    public static function readAllTags() {
        return Crud::readAll("tags");
    }
    public static function readTagById($id) {
        return Crud::readByCondition("tags", "tagId", $id);
    }
    public static function countTags() {
        return Crud::count("tags");
    }
}