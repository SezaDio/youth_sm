<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaNews extends CI_Controller {

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
		$this->load->model('news_models/NewsModels');
		$data['listNewsSm'] = $this->NewsModels->get_data_news_sm();
		$data['listNewsRekomendasi'] = $this->NewsModels->get_data_news_rekomendasi();
		$data['listNewsKomunitas'] = $this->NewsModels->get_data_news_komunitas();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/news_content/kelola_news',$data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Tambah berita baru
	public function tambah_news()
	{
		$this->load->model('news_models/NewsModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_news');
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Hapus berita
	public function delete_news()//$id_produk
	{
		$id_news = $_POST['id_news'];
		$this->load->model('news_models/NewsModels');
		$this->NewsModels->delete_news($id_news);


		$this->index();
	}
	/*function tambah_news_check() {
        $this->load->model('news_models/NewsModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');
		$kategori_wow = array('Wow Sains'=>'Wow Sains',
                              'Wow Teknologi'=>'Wow Teknologi',
                              'Wow Sejarah'=>'Wow Sejarah',
                              'Wow Politik'=>'Wow Politik',
                              'Wow Fiksi'=>'Wow Fiksi',
                              'Wow Rekomendasi'=>'Wow Rekomendasi',
                              'Wow Komunitas'=>'Wow Komunitas',
                              'Wow Lain-Lain'=>'Wow Lain-Lain'
                              );
		$data['kategori_wow']= $kategori_wow;

		if ($tambah == 1) 
		{
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
				$gbr = NULL;

					$data_wow=array(
						'judul_wow'=>$this->input->post('judul_wow'),
						'kategori_wow'=>$this->input->post('kategori'),
						'deskripsi'=>$this->input->post('deskripsi_wow'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL
					);
					$data['dataWow'] = $data_wow;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();

					$data_wow['path_gambar'] = $gbr['file_name'];

					$this->db->insert('wow', $data_wow);
					$this->session->set_flashdata('msg_berhasil', 'Data Youth Wow berhasil ditambahkan');
					redirect('KelolaWow');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth Wow gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_wow', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth Wow gagal ditambahkan');
				$this->tambah_wow_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_wow',$data);
			$this->load->view('skin/admin/footer_admin');
		}     
		
	}*/

	//Validasi news
	public function validasi_news()
	{
		$this->load->model('news_models/NewsModels');
		$data['listNews'] = $this->NewsModels->get_data_news_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_news', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui coming
	public function setuju_news()
	{
		$this->load->model('news_models/NewsModels');

		$id_news = $_POST['id_news'];
		$this->NewsModels->setuju_news($id_news);
		$sub_setuju = "Youth News";
		$msg_setuju = "Posting yang anda masukan di Youth News telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_news();
	}
	
	//Setujui coming
	public function setuju_detail_news($id_news)
	{
		$this->load->model('news_models/NewsModels');

		$this->NewsModels->setuju_news($id_news);
		$sub_setuju = "Youth News";
		$msg_setuju = "Posting yang anda masukan di Youth News telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_news();
	}
	
	//Tolak Data
	public function tolak_news()
	{
		$this->load->model('news_models/NewsModels');

		$id_news = $_POST['id_news'];
		$this->NewsModels->delete_news($id_news);
		$sub_tolak = "Youth News";
		$msg_tolak = "Posting yang anda masukan di Youth News telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_news();
	}
	
	//Tolak Data
	public function tolak_detail_news($id_news)
	{
		$this->load->model('news_models/NewsModels');

		$this->NewsModels->delete_news($id_news);
		$sub_tolak = "Youth News";
		$msg_tolak = "Posting yang anda masukan di Youth News telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_news();
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
