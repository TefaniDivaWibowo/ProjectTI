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
  }
?>