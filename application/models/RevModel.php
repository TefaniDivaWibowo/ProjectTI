<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class RevModel extends CI_Model{

	function __construct(){
		$this->load->database();
	} 

    function get_all(){
      $query = $this->db
                    ->select('*')
                    ->from('data_psb')
                    ->where('rekon', NULL)
                    ->get();
      return $query->result_array();
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

    function get_dt_psb(){
      $query  = $this->db->query("SELECT tgl_ps, SUM(biaya) AS harga FROM data_psb WHERE divisi = 'psb' GROUP BY tgl_ps ORDER BY tgl_ps");
      return $query->result();
    }

    public function add_target($data){
        $res = $this->db->insert('data_target_rev', $data);
        return $res;
    }

    public function get_target($kt){
        $res = $this->db
                    ->select('nominal')                    
                    ->from('data_target_rev')
                    ->where('divisi', $kt)
                    ->get();
      return $res->row()->nominal;
    }

    public function get_kerja($kt, $ka, $ni){
        if($kt == 'semua_ba' && $ka == 'semua_ba'){
          $res  = $this->db->query("SELECT * FROM data_psb WHERE nomor_speedy IN (". $ni.")");
        }elseif ($kt == 'semua_ba') {
          $res = $this->db
                    ->select('*')                    
                    ->from('data_psb')
                    ->where('wilayah', $ka)
                    ->where('nomor_speedy', $ni)
                    ->get();
        }elseif ($ka == 'semua_ba') {
          $res = $this->db
                    ->select('*')                    
                    ->from('data_psb')
                    ->where('divisi', $kt)
                    ->where('nomor_speedy', $ni)
                    ->get();
        }else{
          $res = $this->db
                    ->select('*')                    
                    ->from('data_psb')
                    ->where('divisi', $kt)
                    ->where('wilayah', $ka)
                    ->where('nomor_speedy', $ni)
                    ->get();
        }
      return $res->result_array();
    }

    function get_search($kt, $ka, $tgl1, $bln1, $thn1, $tgl2, $bln2, $thn2){
    $dt1 = $thn1.'-'.$bln1.'-'.$tgl1;
    $dt2 = $thn2.'-'.$bln2.'-'.$tgl2;
    if($kt == "semua_ba" && $ka == "semua_ba" ){
        $cari  = $this->db
                      ->query("SELECT * FROM data_psb WHERE (tgl_va BETWEEN '". $dt1 ."' AND '". $dt2 ."');");
      } elseif ($kt == "semua_ba"){
        $cari  = $this->db
                      ->query("SELECT * FROM data_psb WHERE wilayah = '". $ka ."' AND (tgl_va BETWEEN '". $dt1 ."' AND '". $dt2 ."');");
      } elseif ($ka == "semua_ba"){
        $cari  = $this->db
                      ->query("SELECT * FROM data_psb WHERE divisi = '". $kt ."' AND (tgl_va BETWEEN '". $dt1 ."' AND '". $dt2 ."');");
      } else {
        $cari  = $this->db
                      ->query("SELECT * FROM data_psb WHERE wilayah = '". $ka ."' AND divisi = '". $kt ."' AND (tgl_va BETWEEN '". $dt1 ."' AND '". $dt2 ."');");
      }
      return $cari->result_array();
  }

}
?>