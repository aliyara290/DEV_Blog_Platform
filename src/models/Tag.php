<?php 
require __DIR__ . "/../core/Crud.php";

class Tag {
    public function createTag($value) {
        return Crud::create("tags", ["tagName" => $value]);
    }
    public function updateTag($id, $value) {
        return Crud::update("tags", ["tagName" => $value], "tagId", $id);
    }
    public function deleteTag($id, ) {
        return Crud::delete("tags", "tagId", $id);
    }
    public function readAllTags() {
        return Crud::readAll("tags");
    }
    public function readTagById($id) {
        return Crud::readByCondition("tags", "tagId", $id);
    }
    public function countTags() {
        return Crud::count("tags");
    }
}