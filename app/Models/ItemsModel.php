<?php

namespace App\Models;

use Codeigiter\Model;

class ItemsModel extends Model{
    
    public function __construct(){

        parent::__construct();
        $this->db = \Config\Database::connect();   

    }

    //Query(ies) tob e done upon agreeing on the items scema in db.
    public function addItem(){

    }

    public function deleteItem(){

    }
    public function totalItems(){

    }
}

?>