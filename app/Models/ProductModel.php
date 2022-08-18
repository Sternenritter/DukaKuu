<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'product';
    protected $primary_key = 'product_id';
    protected $allowedFields = ['product_id', 'product_name', 'product_description', 'category_id', 'image_path', 'is_deleted'];
}