<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'category';
    protected $primary_key = 'category_id';
    protected $allowedFields = ['category_id', 'category_name', 'is_deleted'];
}