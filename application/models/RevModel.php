<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class RevModel extends CI_Model{

	function __construct(){
		$this->load->database();
	}

    function get_all_psb(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('divisi', 'psb')
                    ->get();
      return $query->result_array();
    }

    function get_psb(){
      $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', 'psb')
                    ->get();
      return $query->row()->total;
    }

    function get_all_ass(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('divisi', 'ggn')
                    ->get();
      return $query->result_array();
    }

    function get_ass(){
      $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', 'ggn')
                    ->get();
      return $query->row()->total;
    }

    function get_all_migrasi(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('divisi', 'migrasi')
                    ->get();
      return $query->result_array();
    }

    function get_migrasi(){
      $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', 'migrasi')
                    ->get();
      return $query->row()->total;
    }

    function get_all_mainis(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('divisi', 'mainis')
                    ->get();
      return $query->result_array();
    }

    function get_mainis(){
      $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', 'mainis')
                    ->get();
      return $query->row()->total;
    }

    function get_all_main_access(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('divisi', 'main_access')
                    ->get();
      return $query->result_array();
    }
    
    function get_main_access(){
      $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', 'main_access')
                    ->get();
      return $query->row()->total;
    }    

    function get_all_gamas(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('divisi', 'gamas')
                    ->get();
      return $query->result_array();
    }

    function get_gamas(){
      $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', 'gamas')
                    ->get();
      return $query->row()->total;
    }

    function get_all_sd(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('divisi', 'pt3')
                    ->or_where('divisi', 'nodeb')
                    ->or_where('divisi', 'hem')
                    ->or_where('divisi', 'pt2')
                    ->get();
      return $query->result_array();
    }

    function get_sd(){
      $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', 'pt3')
                    ->or_where('divisi', 'nodeb')
                    ->or_where('divisi', 'hem')
                    ->or_where('divisi', 'pt2')
                    ->get();
      return $query->row()->total;
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