<?php


class Home extends MY_Controller
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
	    $data['slides'] = $this->image->getSlides();
	    $data['categoriesImg'] = $this->image->getCategoriesImg();
	    $data['products'] = $this->product->getProductsOverview();
        $data['categories'] = group1($data['products']);

		$this->load->view('contents/home', $data);
	}
}
