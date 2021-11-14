<?php


class User_model extends MY_Model
{
    protected $table = 'customer';
    public function __construct()
    {
        parent::__construct();
    }

    public function register($data)
    {
        return $this->create($data);
    }

    public function checkUser($eamilPhone)
    {
        $customerDetail = $this->db->select('*')
            ->from('customer')
            ->where('email',$eamilPhone)
            ->or_where('phone', $eamilPhone)
            ->get()
            ->row();
        return 	$customerDetail;
    }
}