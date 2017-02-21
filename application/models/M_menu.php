<?php

class M_menu extends CI_Model {
    //put your code here
    var $tablename = "tb_menu";
    var $key = "id_menu";
    
    function __construct() {
        parent::__construct();
    }
    
    function get_list($cari = null,$offset=0,$row_per_page=5 ) {
        $sql    = "SELECT id_menu,kd,nm, tb_menu.id_page,tb_page.nm AS nama_page, par,seq,ket FROM ".$this->tablename.";
                   LEFT JOIN tb_page ON tb_page.id_page=tb_menu.id_page";
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
        $sql = "SELECT id_menu,kd,nm, id_page, par,seq,ket FROM ".$this->tablename;
                
        /*$sql = "SELECT id_menu,kd,nm, tb_menu.id_page,tb_page.nm AS nama_page, par,seq,ket FROM ".$this->tablename.";
                INNER JOIN tb_page ON tb_page.id_page=tb_menu.id_page";*/
        $rs = $this->db->query($sql);
        
        return $rs->result();
    }

     function get_data($id) {
        $sql = "SELECT id_menu,kd,nm,id_page,par,seq,ket FROM ".$this->tablename. ' WHERE '.$this->key.' = ?';
        $data[$this->key] = $id;

        $rs = $this->db->query($sql, $data);
        
        return $rs->row();
    }



   /* function get_data($id) { // menampilkan data page
        $sql = "SELECT id_menu,kd,nm, tb_menu.id_page,tb_page.nm AS nama_page, par,seq,ket FROM ".$this->tablename.";
                LEFT JOIN tb_page ON tb_page.id_page=tb_menu.id_page
                WHERE id_menu = ?
                ";
        $data[$this->key] = $id;

        $rs = $this->db->query($sql, $data);
        
        return $rs->row();
    }*/
    
    function create($data) { // membuat tambah menu
	
        if (!$this->db->insert($this->tablename, $data)) {
            return -1;
        } else {
            return $this->db->insert_id();
        }
    }
    
    function update($data, $id) { //mengubah menu
        $key[$this->key] = $id;
        
        if ($this->db->update($this->tablename, $data, $key)) {
            return -1;
        } else {
            return $this->db->affected_rows();
        }
    }
    
    function delete($id) { //menghapus menu
        $key[$this->key] = $id;
        
        if ($this->db->delete($this->tablename, $key)) {
            return false;
        } else {
            return true;
        }
    }
}
