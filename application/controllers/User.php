<?php

	class User extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			// $this->load->model('Admin_Model');
			$this->load->helper('url');
			$this->load->helper('string');
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index()
		{	
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('user/home');
			$this->load->view('templates/footer');
		}

		public function about()
		{	
			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/about');
			$this->load->view('templates/footer1');
		}

		public function portfolio($no)
		{	
			$data['no'] = $no;
			$this->load->view('templates/header2');
			$this->load->view('templates/navbar');
			$this->load->view('user/portfolio', $data);
			$this->load->view('templates/footer2');
		}

		public function gallery()
		{
			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/gallery');
			$this->load->view('templates/footer1');
		}

		public function kontak()
		{
			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/kontak');
			$this->load->view('templates/footer1');
		}

		public function produk($no)
		{
			$data["hal"] = $no;
			$this->load->view('templates/header2');
			$this->load->view('templates/navbar');
			$this->load->view('user/produk', $data);
			$this->load->view('templates/footer2');
		}

		public function lihatproduk($no)
		{
			$data["kode"] = $no;
			$this->load->view('templates/header2');
			$this->load->view('templates/navbar2');
			$this->load->view('user/produkdetails', $data);
			$this->load->view('templates/footer2');
		}







	}
?>