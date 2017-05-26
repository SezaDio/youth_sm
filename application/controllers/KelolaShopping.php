<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaShopping extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('input');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index()
	{
		$this->load->model('shopping_models/ShoppingModels');
		$data['listProduk'] = $this->ShoppingModels->get_data_produk();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_shopping', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Delete Data
	public function delete_produk()//$id_produk
	{
		$id_produk = $_POST['id_produk'];
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);


		$this->index();
	}
	
	//Validasi Shopping
	public function validasi_shopping()
	{
		$this->load->model('shopping_models/ShoppingModels');
		$data['listProduk'] = $this->ShoppingModels->get_data_produk_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_shopping', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui Shopping
	public function setuju_produk($id_produk)
	{
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->setuju_produk($id_produk);

		redirect(site_url('KelolaShopping/validasi_shopping'));
	}
	
	//Tolak Data
	public function tolak_produk($id_produk)
	{
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);

		redirect(site_url('KelolaShopping/validasi_shopping'));
	}
}