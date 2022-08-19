<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'category';
    protected $primary_key = 'category_id';
    protected $allowedFields = ['category_id', 'category_name', 'is_deleted'];

    public function addCategory($categoryID, $categoryName, $isDeleted){
        if($this->db->query("INSERT INTO category(category_id, catehory_name, is_deleted) VALUES('$categoryID', '$categoryName', '$isDeleted')")){
            return "Success";
        }
        else{
            return "Failed";
        }
    }
    
    public function deleteCategory($categoryID){

        if($this->db->query("DELETE FROM category WHERE category_id='$categoryID'")){
            return "Success";
        }
        else{
            return "Failed";
        }
    }
}