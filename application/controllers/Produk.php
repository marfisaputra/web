<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	var $gallery_path;
	var $gallery_path_url;

	public function __construct(){
		parent::__construct();
		$this->load->model('M_produk');
		$this->gallery_path = realpath(APPPATH . '../lib/produk/');
        $this->gallery_path_url = base_url() . 'lib/produk/';
        check_session();
	}

	public function index(){
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'produk/V_produk');
		$this->load->view(url_admin().'templates/footer');
	}

	public function tampil_tambah() {
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'produk/V_addproduk');
		$this->load->view(url_admin().'templates/footer');
	}

	public function tambah() {

		$this->load->library('upload');
		$this->load->model('M_produk');

		//setting konfiguras upload image
		$config['upload_path']          = './lib/produk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 770;

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('gambar')){
         	$gambar="";
         }else{
         	$gambar=$this->upload->file_name;
         }

         $data=array(
         	'kd'			=>$this->input->post('kode'),
         	'nm'			=>$this->input->post('nama'),
         	'gambar'		=>$gambar,
         	'harga'			=>$this->input->post('harga'),
         	'ket'			=>$this->input->post('keterangan'),
         	);

         if($this->M_produk->create($data)){
         	redirect('produk');
         }else{
         	redirect('produk/tampil_tambah');
         }

    }

    public function edit_produk($id) {
        $this->M_produk;
        $data['produk'] = $this->M_produk->get_data($id);
        $this->load->view(url_admin().'templates/header');
        $this->load->view(url_admin().'produk/V_editproduk',$data);
        $this->load->view(url_admin().'templates/footer');        
    }
	
	public function ubah_produk(){

		$this->load->library('upload');
		$this->load->model('M_produk');
		/*$img_path = $this->input->post('path');*/
		$id = $this->input->post('id_prod');

		//setting konfiguras upload image
		$config['upload_path']          = './lib/produk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 770;

        $this->upload->initialize($config);

         if(!$this->upload->do_upload('gambar')){
         	$gambar="";
         	$data=array(
         	'kd'			=>$this->input->post('kode'),
         	'nm'			=>$this->input->post('nama'),
         	'harga'			=>$this->input->post('harga'),
         	'ket'			=>$this->input->post('keterangan'),
         	);
         }else{

         	$gambar=$this->upload->file_name;
         	 $data=array(
         	'kd'			=>$this->input->post('kode'),
         	'nm'			=>$this->input->post('nama'),
         	'gambar'		=>$gambar,
         	'harga'			=>$this->input->post('harga'),
         	'ket'			=>$this->input->post('keterangan'),
         	);

         	 	/*@unlink("lib/pict_man/".$img_path);*/
         }

         if($this->M_produk->update($data,$id)){
         	redirect('produk');
         }else{
         	redirect('produk/tampil_tambah');
         }
		
	}

	public function hapus($id){
		$this->M_produk;
		//$img = $this->input->get('pic');
		$this->M_produk->delete($id);
		redirect('produk');
	}

	
}