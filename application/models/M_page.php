<?php

class M_page extends CI_Model {
    //put your code here
    var $tablename = "tb_page";
    var $key = "id_page";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_list($cari = null,$offset=0,$row_per_page=3 ) {
        $sql    = "SELECT id_page,kd,nm,jn,thumb,isi,ket FROM ".$this->tablename;
        $where  = "";

        if(isset($cari['nama_page'])){
            $where[] = 'nm LIKE \'%'.$cari['nama_page'].'%\'';   
        }

        if ($where !=""){
            $sql = $sql." WHERE ".implode($where, ' AND ');
        }

        //cari total row
        $max_sql = "SELECT COUNT(*) as cnt FROM ($sql) s ";
        $rs = $this->db->query($max_sql);
        $tmp = $rs->row();
        
        //paging
        $total_rows = $tmp->cnt;
        $limit = "";
        $limit = " LIMIT $offset,$row_per_page";
        //var_dump($limit);
        $sql = $sql.$limit;
        //var_dump($sql);

        $rs = $this->db->query($sql);

        $data['data'] = $rs->result();
        //var_dump($data);
        $data['total_rows'] = $total_rows;
        return $data;
        
        //return $rs->result();
    }
    function tampil_list() {
        $sql = "SELECT id_page,kd,nm,jn,thumb,isi,ket FROM ".$this->tablename;
        
        $rs = $this->db->query($sql);
        
        return $rs->result();
    }

   
    function get_data($id) { // menampilkan data page
        $sql = "SELECT id_page,kd,nm,jn,thumb,isi,ket FROM ".$this->tablename. ' WHERE '.$this->key.' = ?';
        $data[$this->key] = $id;

        $rs = $this->db->query($sql, $data);
        
        return $rs->row();
    }
    
    function create($data) { // membuat create page
	
        if (!$this->db->insert($this->tablename, $data)) {
            return -1;
        } else {
            return $this->db->insert_id();
        }
    }
    
    function update($data, $id) { //mengubah page
        $key[$this->key] = $id;
        
        if ($this->db->update($this->tablename, $data, $key)) {
            return -1;
        } else {
            return $this->db->affected_rows();
        }
    }
    
    function delete($id) { //menghapus page
        $key[$this->key] = $id;
        
        if ($this->db->delete($this->tablename, $key)) {
            return false;
        } else {
            return true;
        }
    }
}
