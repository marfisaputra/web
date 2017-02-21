<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Page extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_page');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		check_session();
		
	}
	
	public function index(){

		//search
		$nama = $this->input->post('nama_page');
		$cari = null;

		if(!empty($nama)){
			$cari['nama_page'] = $nama;

		}

		$offset = $this->input->post('offset');
		if($offset ==''){
			$offset=0;
		}

		//paging
		$rpp = $this->config->item('row_per_page');

		$this->M_page;
		$result = $this->M_page->get_list($cari,$offset);

		$data['page'] = $result['data'];
		$data['no']   = $offset+1;
		$data['total_rows']	= $result['total_rows'];

		$config['base_url']		= '';
		$config['total_rows']	= $result['total_rows'];
		$config['per_page']		= $rpp;

		$this->pagination->initialize($config);
		
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'page/V_page',$data);
		$this->load->view(url_admin().'templates/footer');

	}
	
	public function tampil_tambah() {
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'page/V_addpage');
		$this->load->view(url_admin().'templates/footer');
	}
	

	public function tambah() {
		$data['kd'] = $this->input->post('kode');
		$data['nm'] = $this->input->post('nama');
		$data['jn'] = $this->input->post('jenis');
		$data['thumb'] = $this->input->post('thumb');
		$data['isi'] = $this->input->post('isi');
		$data['ket'] = $this->input->post('keterangan');
		
        $this->M_page;
        $hasil =  $this->M_page->create($data);
		
		if($hasil == -1){ //gagal
		 echo 'Gagal Simpan';
		}
		else{ // berhasil
		redirect('Page');
		
		
		}
    }
	
	
	public function edit_page($id) {
        $this->M_page;
        $data['page'] = $this->M_page->get_data($id);
        $this->load->view(url_admin().'templates/header');
        $this->load->view(url_admin().'page/V_editpage',$data);
        $this->load->view(url_admin().'templates/footer');        
    }
	
	public function ubah_page(){
		
		$this->M_page;
		$id = $this->input->post('id_page');
		$data = array(
					'kd'=>$this->input->post('kode'),
					'nm'=>$this->input->post('nama'),
					'jn'=>$this->input->post('jenis'),
					'thumb'=>$this->input->post('thumb'),
					'isi'=>$this->input->post('isi'),
					'ket'=>$this->input->post('keterangan'),
		);
		$this->M_page->update($data,$id);
		redirect('page');
		
	}


	public function hapus($id){
		$this->M_page;
		$this->M_page->delete($id);
		redirect('page');
	}


}