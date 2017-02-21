<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view(url_admin().'templates/header');
		$this->load->view(url_admin().'home/V_home');
		$this->load->view(url_admin().'templates/footer');

	}


	
	
}