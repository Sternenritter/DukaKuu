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
    //Below function loads all viewable userdetails related to the primary key concerned.
    public function loadCustomerDetails($customer_id){

        $customerDetailsQuery = $this->db->query("SELECT customers WHERE user_id = $customer_id");
            
        foreach ($customerDetailsQuery->getResult()as $row){
            $result[$row->user_id] = array (
                'user_id'   =>  $row->user_id,
                'username'  =>  $row->username,
                'first_name'    =>  $row->first_name,
                'last_name'  => $row->last_name,
                'email'  =>  $row->email,
                'is_deleted'    =>  $row->is_deleted,
                'created_at'    =>  $row->created_at,
                'updated_at'    =>  $row->updated_at
            );
        }
    }

    //Same delete logic applicable for items upon implementations 
    public function deleteCustomer($customer_id){
        
        if($this->db->query("DELETE FROM customers WHERE user_id = '$customer_id'")){
            return "Success in deleting customer";
        }
        else{
            return  "Failed in deleting customer";
        }
    }

    //Function to count all customers(useful for analytics part of admin side)
    public function totalCustomers(){

        $totalUsersQuery = $this->db->query("SELECT COUNT(*) AS count FROM customers");

        foreach($query->getResult() as $row){
            $result = $row->count;
        }

        return $result;

    }
    
    //Items can as well be dealt with in a separate model for organization purposes..
    


}