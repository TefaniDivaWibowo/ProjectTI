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
        $ba  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('nomor_speedy', $isi)
                ->get();
      } else if($kt == "nomor_telp"){
        $ba  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('nomor_pots', $isi)
                ->get();
      } else{
        $ba  = $this->db
                ->select('*')
                ->from('data_psb')
                ->where('ont', $isi)
                ->get();      
    }
      return $ba->result_array();
  }

}
?>