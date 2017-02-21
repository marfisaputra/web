<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Kategori extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
		$this->load->helper('url');
		$this->load->helper('form');
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
		}
*/
		//paging
		/*$rpp = $this->config->item('row_per_page');

		$this->M_menu;
		$result = $this->M_page->get_list($cari,$offset);

		$data['page'] = $result['data'];
		$data['no']   = $offset+1;
		$data['total_rows']	= $result['total_rows'];

		$config['base_url']		= '';
		$config['total_rows']	= $result['total_rows'];
		$config['per_page']		= $rpp;

		$this->pagination->initialize($config);*/
		
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'kategori/V_kategori');
		$this->load->view(url_admin().'templates/footer');

	}
	
	public function tampil_tambah() {
		$this->load->model('M_kategori');
		$data['kategori'] = $this->M_kategori->tampil_list();
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'kategori/V_addkategori',$data);
		$this->load->view(url_admin().'templates/footer');
	}
	

	public function tambah() {
		$data['kd'] 		= $this->input->post('kode');
		$data['nm'] 		= $this->input->post('nama');
		$data['par'] 		= $this->input->post('parent');
        $this->M_kategori;
        $hasil =  $this->M_kategori->create($data);
		
		if($hasil == -1){ //gagal
		 echo 'Gagal Simpan';
		}
		else{ // berhasil
		redirect('Kategori');
		}
    }
	
	
	public function edit_kategori($id) {
        $this->M_kategori;
        $data['kategori'] = $this->M_kategori->get_data($id);
        $this->load->view(url_admin().'templates/header');
        $this->load->view(url_admin().'kategori/V_editkategori',$data);
        $this->load->view(url_admin().'templates/footer');        
    }
	
	public function ubah_kategori(){
		
		$this->M_kategori;
		$id = $this->input->post('id_post_kat');
		$data = array(
					'kd'=>$this->input->post('kode'),
					'nm'=>$this->input->post('nama'),
					'par'=>$this->input->post('parent'),
		);
		$this->M_kategori->update($data,$id);
		redirect('kategori');
		
	}

	public function hapus($id){
		$this->M_kategori;
		$this->M_kategori->delete($id);
		redirect('kategori');
	}


}