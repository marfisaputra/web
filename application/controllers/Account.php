<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Account extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
	}
	
	// Melihat halaman Login
	public function index(){
		$this->load->view(url_admin().'V_login');
	}

	
	public function login(){
		$username = $this->input->post('username',true);
		$password = md5($this->input->post('password',true));
		
		$temp = $this->M_user->check_user($username,$password);
		// check account
		$num_account = count($temp);
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('V_login');
		}
		else{
			if($num_account > 0){
				// kalau ada set session
				$array_items  = array('id_user'=>$temp->id_user,'username'=>$temp->username,'logged_in'=>true);
				$this->session->set_userdata($array_items);
				
				//update login
				/*$this->db->where('username',$username);
                $this->db->update('pegawai',array('last_login'=>date('Y-m-d')));*/
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
				redirect(site_url('Account/view_success_page'));	
			}
			else{
				$this->session->set_flashdata('notification','Peringatan : Username dan Password tidak cocok</br>');
				redirect(site_url('Account'));	
			}

		}	
		
	}
	
	public function view_success_page(){
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
		redirect(site_url('account'));
		}

		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'home/V_home');
		$this->load->view(url_admin().'templates/footer');

	}	


	public function logout(){
	$this->session->sess_destroy();
	redirect(site_url('Account'));
	}

	/*
	public function edit_karyawan($id_peg){
		$this->load->view('edit_karyawan');
	}
	*/

	}