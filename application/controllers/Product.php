<?php


class Product extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Product_model' => 'product'
        ));
    }

    public function getProduct($id = 0)
    {
        if($id == 0) {
            show_404();
        } else {
            $data['product'] = $this->product->getProduct($id);
            $data['relateds'] = $this->product->getRelatedProducts($data['product']->subcategory, $data['product']->marque, $data['product']->categorie, $data['product']->productId);
            $this->load->view("contents/product", $data);
        }
    }

}