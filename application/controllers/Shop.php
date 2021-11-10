<?php


class Shop extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
            'Image_model' => 'image',
            'Product_model' => 'product'
        ));
	}

	public function index()
	{
	    $data['products'] = $this->product->getProductsOverview();
        $data['categories'] = group1($data['products']);
		$this->load->view('contents/shop', $data);
	}
}
