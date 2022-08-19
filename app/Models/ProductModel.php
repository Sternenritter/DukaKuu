<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'product';
    protected $primary_key = 'product_id';
    protected $allowedFields = ['product_id', 'product_name', 'product_description', 'category_id', 'image_path', 'is_deleted'];

    public function addProduct($productName, $productDescription, $categoryID, $imagePath, $isDeleted){

        if($this->db->query("INSERT INTO product(product_name, product_description, category_id, image_path, is_deleted) VALUES ('$productName', '$productDescription', '$categoryID', '$imagePath', '$isDeleted)")){
            return "Success";
        }
        else{
            return "Failed";
        }
    }

    public function deleteProduct($productID){

        if($this->db->query = ("DELETE FROM product WHERE product_id= '$productID")){
            return "Success";
        }
        else{
            return "Failed";
        }
    }

    public function editProduct(){
        
    }
}