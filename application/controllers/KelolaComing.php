<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaComing extends CI_Controller {

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
		$this->load->model('coming_models/ComingModels');
		$data['listComing'] = $this->ComingModels->get_data_coming();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_coming', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Delete Data
	public function delete_coming()//$id_produk
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_produk($id_coming);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_coming($id_coming)//
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_coming($id_coming);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');

		//Ambil id_agenda yang akan diedit
		$data['id_coming'] = $this->ComingModels->select_by_id_coming($id_coming)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_coming', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi coming
	public function validasi_coming()
	{
		$this->load->model('coming_models/ComingModels');
		$data['listComing'] = $this->ComingModels->get_data_coming_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_coming', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui coming
	public function setuju_coming()
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->setuju_coming($id_coming);
		$sub_setuju = "Youth coming";
		$msg_setuju = "Posting yang anda masukan di Youth coming telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_coming();
	}
	
	//Setujui coming
	public function setuju_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->setuju_coming($id_coming);
		$sub_setuju = "Youth coming";
		$msg_setuju = "Posting yang anda masukan di Youth Coming Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_coming();
	}
	
	//Tolak Data
	public function tolak_coming()
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_coming($id_coming);
		$sub_tolak = "Youth coming";
		$msg_tolak = "Posting yang anda masukan di Youth Coming Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_coming();
	}
	
	//Tolak Data
	public function tolak_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_coming($id_coming);
		$sub_tolak = "Youth coming";
		$msg_tolak = "Posting yang anda masukan di Youth Coming Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_coming();
	}
	
	//kirim email
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
