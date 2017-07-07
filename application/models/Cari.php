<?php
  Class Cari extends CI_Model {
    function __construct(){
      $this->load->database();
    }

    function get_all_data(){
      $this->db->from('data_psb');
      $query  = $this->db->get();
      return $query->result_array();
    }

    function get_search_data($kt, $isi){
      if($kt == "nomor_inet"){
        /*$ba  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('nomor_speedy', $isi)
                ->get();*/
        $ba  = $this->db
                      ->query("SELECT * FROM data_psb WHERE nomor_speedy IN(".$isi.") AND ba_rev IS NOT NULL");
      } else if($kt == "nomor_telp"){
        /*$ba  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('nomor_pots', $isi)
                ->get();*/
        $ba  = $this->db
                      ->query("SELECT * FROM data_psb WHERE nomor_pots IN(".$isi.") AND ba_rev IS NOT NULL");
      } else{
        /*$ba  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('ont', $isi)
                ->get();*/
        $ba  = $this->db
                      ->query("SELECT * FROM data_psb WHERE ont IN('".$isi."') AND ba_rev IS NOT NULL");
    }
      return $ba->result_array();
  }

  function get_search_lama($kt, $tgl, $bln, $thn){
    $dt = $thn.'-'.$bln.'-'.$tgl;
    if($kt == "tgl_va"){
        $cari  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('tgl_va', $dt)
                ->get();
      } else{
        $cari  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('tgl_ps', $dt)
                ->get();  
    }        
      return $cari->result_array();
  }

  function get_search($kt, $tgl1, $bln1, $thn1, $tgl2, $bln2, $thn2){
    $dt1 = $thn1.'-'.$bln1.'-'.$tgl1;
    $dt2 = $thn2.'-'.$bln2.'-'.$tgl2;
    if($kt == "tgl_va"){
        $cari  = $this->db->query("SELECT * FROM data_psb WHERE (tgl_va BETWEEN '". $dt1 ."' AND '". $dt2 ."');");
      } else{
        $cari  = $cari  = $this->db->query("SELECT * FROM data_psb WHERE (tgl_ps BETWEEN '". $dt1 ."' AND '". $dt2 ."');");
    }
      return $cari->result_array();
  }

  function get_dt_rekon($kt, $ka){
    if($kt == "semua_ba" && $ka == "semua_ba"){
        $cari  = $this->db
                ->select('*')
                ->from('data_psb')
                ->get();
      } else if($kt == "semua_ba"){
        $cari  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('wilayah', $ka)
                ->get();
      } else if($ka == "semua_ba"){
        $cari  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('divisi', $kt)
                ->get();
      } else{
        $cari  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('divisi', $kt)
                ->where('wilayah', $ka)
                ->get();  
    }        
      return $cari->result_array();
  }

  function get_revenue($kt, $ka){
    if($kt == "semua_ba" && $ka == "semua_ba"){
        $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->get();
      } else if($kt == "semua_ba"){
        $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('wilayah', $ka)
                    ->get();
      } else{
        $query = $this->db
                    ->select('SUM(biaya) as total')
                    ->from('data_psb')
                    ->where('divisi', $kt)
                    ->where('wilayah', $ka)
                    ->get();  
    }    
      return $query->row()->total;
    }

}
?>