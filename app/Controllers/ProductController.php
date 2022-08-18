<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;


class ProductController extends BaseController
{

    public function getCategories() {
        try {
            $model = new CategoryModel();
            $categories = $model->findAll();
        } catch (\Throwable $th) {
            echo $th;
        }

        return $this->response->setJSON(['categories' => $categories]);
    }

    public function getProductsByCategory() {
        try {
            $model = new ProductModel();
            $products = $model->where(['category_id' => $this->request->getVar('category_id')])->findAll();
        } catch (\Throwable $th) {
            echo $th;
        }

        return $this->response->setJSON(['products' => $products]);
    } 
}
 