<?php
  Class PerformAss extends CI_Model {
    function __construct(){
      $this->load->database();
    }

    function get_all_data(){
      $this->db->from('data_open');
      $query  = $this->db->get();
      return $query->result_array();
    }

    function get_all_ttr(){
      //$this->db->from('data_open');
      $query  = $this->db
                ->select('ttr_customer')
                ->from('data_open')
                ->get();
      return $query->result_array();
    }
  }
?>