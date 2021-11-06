<?php


class Product_model extends MY_Model
{
    protected $table = 'v_product';

    public function __construct()
    {
        parent::__construct();
    }

    public function getProducts()
    {
        return $this->readAll();
    }

    public function getCatégories()
    {
        return $this->readAll();
    }
}