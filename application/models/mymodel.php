<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mymodel extends CI_Model{

	function __construct(){
		$this->load->database();
	}

    function get_all(){
      $query = $this->db->from('data_psb')
                        ->get();
      return $query->result_array();
    }

	public function Add($data){
        $res = $this->db->insert('data_psb', $data);
        return $res;
    }

    public function Update($table, $data, $where){
        $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        
    }
 
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function GetWhere($table, $data){
    $res=$this->db->get_where($table, $data);
    return $res->result_array();

    }

}
?>