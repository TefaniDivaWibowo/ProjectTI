<?php
  Class PerformAss extends CI_Model {
    function __construct(){
      $this->load->database();
    }

    //START OPEN
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
    //END OPEN
    //START ROW LABEL
    
    //END

    //START PA COPPER PER AREA
    /*function get_pa_copper(){
      $kota = array("Madiun", "Malang", "Kediri", "Jember", "Pasuruan");
        for ($i = 0; $i < count($kota); $i++){
          $query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%$kota[$i]%' AND mitra_pa != 'TA' AND  technology = 'Copper'");
          $this->db->select('*')
                            ->from('data_open')
                            ->like('witel', $kota[$i])
                            ->where('mitra_pa !=', 'TA')
                            ->where('technology','Copper')
                            ->get();
          $rekap['PA_Copper'.$kota[$i]] = $query->num_rows();
          //return $rekap['Fiber_'.$kota[$i]];
        }
    }*/
    //END

  //OPEN
    //START TA BY DATE
    //COPPER
    function get_ta_copper_date(){
      $query  = $this->db->query("SELECT ttr_customer, COUNT(customer_name) FROM data_open WHERE technology = 'Copper' AND mitra_pa = 'TA' GROUP BY ttr_customer ORDER BY ttr_customer");
      return $query->result();
    }

    //FIBER
    function get_ta_fiber_date(){
      $query  = $this->db->query("SELECT ttr_customer, COUNT(customer_name) FROM data_open WHERE technology = 'Fiber' AND mitra_pa = 'TA' GROUP BY ttr_customer ORDER BY ttr_customer");
      return $query->result();
    }
    //END

    //START PA BY DATE
    //COPPER
    function get_pa_copper_date(){
      $query  = $this->db->query("SELECT ttr_customer, COUNT(customer_name) FROM data_open WHERE technology = 'Copper' AND mitra_pa != 'TA' GROUP BY ttr_customer ORDER BY ttr_customer");
      return $query->result_array();
    }

    //FIBER
    function get_pa_fiber_date(){
      $query  = $this->db->query("SELECT ttr_customer, COUNT(customer_name) FROM data_open WHERE technology = 'Fiber' AND mitra_pa != 'TA' GROUP BY ttr_customer ORDER BY ttr_customer");
      return $query->result_array();
    }
    //END 
  //END

  //CLOSE
    //Get Data Close
    function get_all_data_close(){
      $this->db->from('data_close');
      $query  = $this->db->get();
      return $query->result_array();
    }

    //All Data by Date
    function get_all_data_date(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result_array();
    }

    //START TA BY DATE
    //COPPER
    function get_ta_copper_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Copper' AND mitra_pa = 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result_array();
    }

    //FIBER
    function get_ta_fiber_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Fiber' AND mitra_pa = 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result_array();
    }
    //END

    //START PA BY DATE
    //COPPER
    function get_pa_copper_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Copper' AND mitra_pa != 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result_array();
    }

    //FIBER
    function get_pa_fiber_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Fiber' AND mitra_pa != 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result_array();
    }
    //END 
  //END
  }

?>