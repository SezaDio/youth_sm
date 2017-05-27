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

	//Delete Data detail produk
	public function delete_detail_produk($id_produk)//
	{
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_produk($id_produk)
	{
		$this->load->model('shopping_models/ShoppingModels');

		//Ambil id_agenda yang akan diedit
		$data['id_produk'] = $this->ShoppingModels->select_by_id_shopping($id_produk)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_produk_shopping', $data);
		$this->load->view('skin/admin/footer_admin');
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
	public function setuju_produk()
	{
		$id_produk = $_POST['id_produk'];
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->setuju_produk($id_produk);
		$sub_setuju = "Youth Shopping";
		$msg_setuju = "Posting yang anda masukan di Youth Shopping telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_shopping();
	}
	
	//Tolak Data
	public function tolak_produk()
	{
		$id_produk = $_POST['id_produk'];
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);
		$sub_tolak = "Youth Shopping";
		$msg_tolak = "Posting yang anda masukan di Youth Shopping telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_shopping();
	}
	
	function kirim_email($sub,$msg) {
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'youthsuaramerdeka@gmail.com'; //change this
		$config['smtp_pass'] = 'suaramerdeka'; //change this
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
		$this->load->library('email'); // load email library
		$this->email->initialize($config);
		$this->email->from('youthsuaramerdeka@gmail.com', 'admin');
		$this->email->to('abdulazies.k@gmail.com');
		$this->email->subject($sub);
		$this->email->message($msg);
		if ($this->email->send())
			echo "Mail Sent!";
		else
			show_error($this->email->print_debugger());
    }
}
