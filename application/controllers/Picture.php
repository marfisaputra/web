<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture extends CI_Controller {

	var $gallery_path;
	var $gallery_path_url;

	public function __construct(){
		parent::__construct();
		$this->load->model('M_picture');
		$this->gallery_path = realpath(APPPATH . '../lib/pict_man/');
        $this->gallery_path_url = base_url() . 'lib/pict_man/';
        check_session();
	}

	public function index(){
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'templates/tinymce');
		$this->load->view(url_admin().'picture/V_picture');
		$this->load->view(url_admin().'templates/footer');
	}

	public function tampil_tambah() {
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'picture/V_addpicture');
		$this->load->view(url_admin().'templates/footer');
	}

	public function tambah() {

		$this->load->library('upload');
		$this->load->model('M_picture');

		//setting konfiguras upload image
		$config['upload_path']          = './lib/pict_man/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 770;

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('picture')){
         	$gambar="";
         }else{
         	$gambar=$this->upload->file_name;
         }

         $id_user = $this->input->post('id_user');
         $data=array(
         	'id_user'		=>$id_user,
         	'nm'			=>$this->input->post('nama'),
         	'pic'			=>$gambar,
         	'ket'			=>$this->input->post('keterangan'),
         	);

         if($this->M_picture->create($data)){
         	redirect('picture');
         }else{
         	redirect('Picture/tampil_tambah');
         }

    }

    public function edit_picture($id) {
        $this->M_picture;
        $data['picture'] = $this->M_picture->get_data($id);
        $this->load->view(url_admin().'templates/header');
        $this->load->view(url_admin().'picture/V_editpicture',$data);
        $this->load->view(url_admin().'templates/footer');        
    }
	
	public function ubah_picture(){

		$this->load->library('upload');
		$this->load->model('M_picture');
		$img_path = $this->input->post('path');
		$id = $this->input->post('id_pic');

		//setting konfiguras upload image
		$config['upload_path']          = './lib/pict_man/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 770;

        $this->upload->initialize($config);

         if(!$this->upload->do_upload('picture')){
         	$gambar="";
         	$data=array(
         	'id_user'		=>$this->input->post('id_user'),
         	'nm'			=>$this->input->post('nama'),
         	'ket'			=>$this->input->post('keterangan'),
         	);
         }else{

         	$gambar=$this->upload->file_name;
         	 $data=array(
         	'id_user'		=>$this->input->post('id_user'),
         	'nm'			=>$this->input->post('nama'),
         	'pic'			=>$gambar,
         	'ket'			=>$this->input->post('keterangan'),
         	);

         	 	/*@unlink("lib/pict_man/".$img_path);*/
         }

         if($this->M_picture->update($data,$id)){
         	redirect('picture');
         }else{
         	redirect('Picture/tampil_tambah');
         }
		
	}

	public function hapus($id){
		$this->M_picture;
		$img = $this->input->get('pic');
		$this->M_picture->delete($id,$img);
		redirect('picture');
	}

	
}