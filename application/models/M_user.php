<?php

class M_user extends CI_Model{
	function __construct(){
		parent::__construct();
		
	}
	
	function m_lihat(){
		$lihat = $this->db->get('tb_admin');
		return $lihat->result();
 
	}
	
	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('tb_admin');
		return $edit->result();
	
	}

	// cek keberadaan user di sistem
	function check_user($username,$password){
		$sql  = "select username,pwd,id_user from tb_admin where username = ? and pwd = ?";
		$data = array($username,$password);
		$rs = $this->db->query($sql,$data);
		$username = $rs->row();
		return $username;
	}
	
	// select berdasarkan id
	function select_by_id($id_user){
		$this->db->select('*');
		$this->db->from('tb_admin');
		$this->db->where('id',$id_user);
	}
	
	
	
	}
