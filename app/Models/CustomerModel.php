<?php namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model {
    protected $table = 'customers';
    protected $allowedFields = ['username', 'first_name', 'last_name', 'email', 'password', 'is_deleted'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert (array $data)
    {
        $data = $this->passwordHash($data);
        
        return $data;  
    }

    protected function beforeUpdate (array $data)
    {
        $data = $this->passwordHash($data);

        return $data;  
    }

    protected function passwordHash (array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        
        return $data;
    }

    //username is assumed to be the unique index for customers.
    //Same delete logic applicable for items upon implementations 
    public function deleteCustomer($customer_id){
        if($this->db->query("DELETE FROM customers WHERE username = '$customer_id'")){
            return "Success in deleting customer";
        }
        else{
            return  "Failed in deleting customer";
        }
    }

    //Items can as well be dealt with in a separate model for organization purposes..
    public function addItem(){

    }
    public function deleteItem(){

    }


}