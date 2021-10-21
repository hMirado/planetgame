<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->set_template('base');
		$this->load->section('header', 'sections/header');
		$this->load->section('footer', 'sections/footer');

		$this->load->css('assets/vendor/bootstrap/css/bootstrap.min.css');
		$this->load->css('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
		$this->load->css('assets/fonts/iconic/css/material-design-iconic-font.min.css');
		$this->load->css('assets/fonts/linearicons-v1.0.0/icon-font.min.css');
		$this->load->css('assets/vendor/animate/animate.css');
		$this->load->css('assets/vendor/css-hamburgers/hamburgers.min.css');
		$this->load->css('assets/vendor/animsition/css/animsition.min.css');
		$this->load->css('assets/vendor/select2/select2.min.css');
		$this->load->css('assets/vendor/daterangepicker/daterangepicker.css');
		$this->load->css('assets/vendor/slick/slick.css');
		$this->load->css('assets/vendor/MagnificPopup/magnific-popup.css');
		$this->load->css('assets/vendor/perfect-scrollbar/perfect-scrollbar.css');
		$this->load->css('assets/css/util.css');
		$this->load->css('assets/css/main.css');

		$this->load->js('assets/vendor/jquery/jquery-3.2.1.min.js');
		$this->load->js('assets/vendor/animsition/js/animsition.min.js');
		$this->load->js('assets/vendor/bootstrap/js/popper.js');
		$this->load->js('assets/vendor/bootstrap/js/bootstrap.min.js');
		$this->load->js('assets/vendor/select2/select2.min.js');
		$this->load->js('assets/vendor/daterangepicker/moment.min.js');
		$this->load->js('assets/vendor/daterangepicker/daterangepicker.js');
		$this->load->js('assets/vendor/slick/slick.min.js');
		$this->load->js('assets/js/slick-custom.js');
		$this->load->js('assets/vendor/parallax100/parallax100.js');
		$this->load->js('assets/vendor/MagnificPopup/jquery.magnific-popup.min.js');
		$this->load->js('assets/vendor/isotope/isotope.pkgd.min.js');
		$this->load->js('assets/vendor/sweetalert/sweetalert.min.js');
		$this->load->js('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js');
		$this->load->js('assets/js/main.js');

        $this->load->library('session');
        $newdata = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
        );

        $this->session->set_userdata($newdata);
	}

}
