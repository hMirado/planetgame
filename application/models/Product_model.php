<?php


class Product_model extends MY_Model
{
    protected $table = 'v_product';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retourne quelque produit
     */
    public function getProductsOverview()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('stock > 0');
        $this->db->limit(12);
        $liste = $this->db->get();
        return $liste->result();
    }

    /**
     * Retourne tout les produits stock > 0
     */
    public function getProducts()
    {
        return $this->readAll(null, 'stock > 0');
    }

    public function getCatégories()
    {
        return $this->readAll();
    }
}