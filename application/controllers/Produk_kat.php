<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Produk_kat extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk_kat');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		check_session();
		
	}
	
	public function index(){

		//search
		/*$nama = $this->input->post('nama_page');
		$cari = null;

		if(!empty($nama)){
			$cari['nama_page'] = $nama;

		}

		$offset = $this->input->post('offset');
		if($offset ==''){
			$offset=0;
		}*/

		//paging
		/*$rpp = $this->config->item('row_per_page');

		$this->M_page;
		$result = $this->M_page->get_list($cari,$offset);

		$data['page'] = $result['data'];
		$data['no']   = $offset+1;
		$data['total_rows']	= $result['total_rows'];

		$config['base_url']		= '';
		$config['total_rows']	= $result['total_rows'];
		$config['per_page']		= $rpp;

		$this->pagination->initialize($config);*/
		
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'produk_kat/V_produk_kat');
		$this->load->view(url_admin().'templates/footer');

	}
	
	public function tampil_tambah() {
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'produk_kat/V_addproduk_kat');
		$this->load->view(url_admin().'templates/footer');
	}
	

	public function tambah() {
		$data['kd'] = $this->input->post('kode');
		$data['nm'] = $this->input->post('nama');
		$data['par'] = $this->input->post('parent');
		$data['ket'] = $this->input->post('keterangan');
		
        $this->M_produk_kat;
        $hasil =  $this->M_produk_kat->create($data);
		
		if($hasil == -1){ //gagal
		 echo 'Gagal Simpan';
		}
		else{ // berhasil
		redirect('Produk_kat');
		
		
		}
    }
	
	
	public function edit_prokat($id) {
        $this->M_produk_kat;
        $data['produk_kat'] = $this->M_produk_kat->get_data($id);
        $this->load->view(url_admin().'templates/header');
        $this->load->view(url_admin().'produk_kat/V_editproduk_kat',$data);
        $this->load->view(url_admin().'templates/footer');        
    }
	
	public function ubah_prokat(){
		
		$this->M_produk_kat;
		$id = $this->input->post('id_prokat');
		$data = array(
					'kd'=>$this->input->post('kode'),
					'nm'=>$this->input->post('nama'),
					'par'=>$this->input->post('parent'),
					'ket'=>$this->input->post('keterangan'),
		);
		$this->M_produk_kat->update($data,$id);
		redirect('produk_kat');
		
	}


	public function hapus($id){
		$this->M_produk_kat;
		$this->M_produk_kat->delete($id);
		redirect('produk_kat');
	}


}