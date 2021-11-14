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
     * Récupere tout les produits stock > 0
     */
    public function getProducts()
    {
        return $this->readAll(null, 'stock > 0');
    }

    public function getProduct($id)
    {
        return $this->readLine(null, 'productId='.$id);
    }

    public function getRelatedProducts($subactegory, $marque, $categorie, $id)
    {
        $where = array();
        if ($subactegory) {
            array_push($where, "subcategory = '$subactegory'");
        }
        if ($subactegory) {
            array_push($where, "categorie = '$categorie'");
        }
        if ($marque) {
            array_push($where, "marque = '$marque'");
        }

        if ($where) {
            $where = implode($where, ' OR ');
            $where = " productId != $id AND ($where)";
        }

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($where);
        $this->db->limit(4);
        $liste = $this->db->get();
        return $liste->result();
    }

    /**
     * Récupere les catégories
     */
    public function getCatégories()
    {
        return $this->readAll();
    }
}