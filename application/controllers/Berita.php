<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	var $gallery_path;
	var $gallery_path_url;

	public function __construct(){
		parent::__construct();
		$this->load->model('M_berita');
		$this->gallery_path = realpath(APPPATH . '../lib/pict_man/');
        $this->gallery_path_url = base_url() . 'lib/pict_man/';
	}



	public function index(){
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'templates/tinymce');
		$this->load->view(url_admin().'berita/V_berita');
		$this->load->view(url_admin().'templates/footer');
	}

	public function tampil_tambah() {
		$this->load->model('M_kategori');
		$data['kategori'] = $this->M_kategori->tampil_list();
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'berita/V_addberita',$data);
		$this->load->view(url_admin().'templates/tinymce');
		$this->load->view(url_admin().'templates/footer');
	}

	public function tambah() {

		$kategori   			= $this->input->post('kategori');
		$data['id_post_kat'] 	= $kategori;
		$data['kd']				= $this->input->post('kode');
		$data['nm']				= $this->input->post('judul');
		$data['isi']			= $this->input->post('isi');
		$data['tgl_publish']	= date("Y-m-d H:i:s");
		$data['is_publish']		= $this->input->post('status');
		
		$this->M_berita;
		$hasil = $this->M_berita->create($data);

		if ($hasil == -1){
			echo 'Gagal Insert';
		}
		else{
			redirect('berita');
		}

    }

    public function edit_post($id) {
        $this->M_berita;
        $data['berita'] = $this->M_berita->get_data($id);
        $this->load->model('M_kategori');
        $data['kategori'] = $this->M_kategori->tampil_list();
        $this->load->view(url_admin().'templates/header');
        $this->load->view(url_admin().'templates/tinymce');
        $this->load->view(url_admin().'berita/V_editberita',$data);
        $this->load->view(url_admin().'templates/footer');        
    }
	
	public function ubah_post(){
		
		$this->M_berita;
		$id = $this->input->post('id_post');
		$this->load->model('M_kategori');
		$id_kategori = $this->input->post('id_kategori');
		$data = array(
					'id_post_kat'=>$this->input->post('kategori'),
					'kd'=>$this->input->post('kode'),
					'nm'=>$this->input->post('judul'),
					'isi'=>$this->input->post('isi_post'),
					'tgl_publish'=>date("Y-m-d H:i:s"),
					'is_publish'=>$this->input->post('status'),
		);
		/*var_dump($data);*/
		$this->M_berita->update($data,$id);
		redirect('berita');
		
	}

	public function hapus($id){
		$this->M_berita;
		$this->M_berita->delete($id);
		redirect('berita');
	}

	
}