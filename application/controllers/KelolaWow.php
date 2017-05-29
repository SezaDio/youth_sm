<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaWow extends CI_Controller {

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
		$this->load->model('wow_models/WowModels');
		$data['listWow'] = $this->WowModels->get_data_wow();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_wow', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	public function tambah_wow()
	{
		$this->load->model('wow_models/WowModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_wow');
		$this->load->view('skin/admin/footer_admin');
	}
	
	function tambah_wow_check() {
        $this->load->model('wow_models/WowModels');
		$this->load->library('form_validation');
                
		$this->form_validation->set_rules('judul_wow', 'Judul', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('deskripsi_wow', 'Deskripsi', 'required');

		//Mengambil filename gambar untuk disimpan
		$nmfile = "file_".time();
		$config['upload_path'] = './asset/upload_img_wow/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '4000'; //kb
		$config['file_name'] = $nmfile;

		//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
		if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
		{

			$this->load->library('upload', $config);
			if($this->upload->do_upload('filefoto'))
			{
				//echo "Masuk";
				$gbr = $this->upload->data();
			}

			$data_wow=array(
				'judul_wow'=>$this->input->post('judul_wow'),
				'kategori_wow'=>$this->input->post('kategori'),
				'deskripsi'=>$this->input->post('deskripsi_wow'),
				'tanggal_posting'=>date("Y-m-d h:i:sa"),
				'path_gambar'=>$gbr['file_name']
			);
		}
		if($this->db->insert('wow', $data_wow)){
			$this->session->set_flashdata('msg_berhasil', 'Data Youth Wow berhasil ditambahkan');
			redirect('KelolaWow');
		} 
		else{
			$this->session->set_flashdata('msg_gagal', 'Data Youth Wow gagal ditambahkan');
			$this->tambah_wow_check();
		}
	}
	
	//Edit Data WOW
	public function edit_wow($id_wow) //Fungsi mengambil id data WOW yang akan di edit
	{
		$this->load->model('wow_models/WowModels');

		//Ambil id_agenda yang akan diedit
		$data['wow'] = $this->WowModels->select_by_id_wow($id_wow)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_wow',$data);
		$this->load->view('skin/admin/footer_admin');
		
	}
	/*public function proses_update_wow() //Fungsi melakukan update pada database
	{
		$this->load->model('daftaragenda/Agenda_model');
		$id_agenda = $this->input->post('id_agenda');
		$this->Agenda_model->update_agenda($id_agenda, $data);
		
		redirect(site_url('daftaragenda'));
	}*/


	public function delete_wow()//$id_produk
	{
		$id_wow = $_POST['id_wow'];
		$this->load->model('wow_models/WowModels');
		$this->WowModels->delete_wow($id_wow);


		$this->index();
	}
}