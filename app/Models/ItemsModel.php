<?php

namespace App\Models;

use Codeigiter\Model;

class ItemsModel extends Model{

    public function __construct(){

        parent::__construct();
        $this->db = \Config\Database::connect();   

    }

    //Query(ies) to be done upon agreeing on the items schema in db.
    public function addItem(){

    }

    public function deleteItem(){

    }
    public function totalItems(){

    }
}

?>