<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Menu extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_menu');
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
		$this->load->view(url_admin().'menu/V_menu');
		$this->load->view(url_admin().'templates/footer');

	}
	
	public function tampil_tambah() {
		$this->load->model('M_page');
		$data['page'] = $this->M_page->tampil_list();
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'menu/V_addmenu',$data);
		$this->load->view(url_admin().'templates/footer');
	}
	

	public function tambah() {
		$page 				= $this->input->post('page');
		$data['kd'] 		= $this->input->post('kode');
		$data['nm'] 		= $this->input->post('nama');
		$data['id_page'] 	= $page;
		$data['par'] 		= $this->input->post('parent');
		$data['seq'] 		= $this->input->post('seq');
		$data['ket'] 		= $this->input->post('keterangan');
        $this->M_menu;
        $hasil =  $this->M_menu->create($data);
		
		if($hasil == -1){ //gagal
		 echo 'Gagal Simpan';
		}
		else{ // berhasil
		redirect('Menu');
		
		
		}
    }
	
	
	public function edit_menu($id) {
        $this->M_menu;
        $data['menu'] = $this->M_menu->get_data($id);
        $this->load->model('M_page');
        $data['page'] = $this->M_page->tampil_list();
        $this->load->view(url_admin().'templates/header');
        $this->load->view(url_admin().'menu/V_editmenu',$data);
        $this->load->view(url_admin().'templates/footer');        
    }
	
	public function ubah_menu(){
		
		$this->M_menu;
		$id = $this->input->post('id_menu');
		$this->load->model('M_page');
		$id_page = $this->input->post('id_page');
		$data = array(
					'kd'=>$this->input->post('kode'),
					'nm'=>$this->input->post('nama'),
					'id_page'=>$this->input->post('page'),
					'par'=>$this->input->post('parent'),
					'seq'=>$this->input->post('seq'),
					'ket'=>$this->input->post('keterangan'),
		);
		$this->M_menu->update($data,$id);
		redirect('menu');
		
	}


	public function hapus($id){
		$this->M_menu;
		$this->M_menu->delete($id);
		redirect('menu');
	}


}