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

    //START PA COPPER PER AREA
    function get_pa_copper(){
      $kota = array("Madiun", "Malang", "Kediri", "Jember", "Pasuruan");
        for ($i = 0; $i < count($kota); $i++){
          $query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%" . $kota[$i] . "%' AND mitra_pa != 'TA' AND technology = 'Copper'");
          /*$this->db->select('*')
                            ->from('data_open')
                            ->like('witel', $kota[$i])
                            ->where('mitra_pa !=', 'TA')
                            ->where('technology','Copper')
                            ->get();*/
          $rekap['PA_Copper'.$kota[$i]] = $query->num_rows();
      }
    }
    //END

  //OPEN
    //FOR REPORT YEAR MONTH
    function get_this_month($kota, $month){
        $query  = $this->db->query("SELECT ttr_customer, count(customer_name) FROM data_open WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from ttr_customer) = '". $month ."' GROUP BY ttr_customer ORDER BY ttr_customer");
        return $query->result();
    }

     //FOR REPORT  MONTH
    function get_search($month, $mipa, $tech, $kota){
      if ($mipa == "all" && $tech == "all"){
        $cari = $this->db
                     ->query("SELECT ttr_customer, count(customer_name) FROM data_open WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from ttr_customer) = '". $month ."' GROUP BY ttr_customer ORDER BY ttr_customer");
      } elseif ($mipa == "all") {
        $cari = $this->db
                     ->query("SELECT ttr_customer, count(customer_name) FROM data_open WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from ttr_customer) = '". $month ."' AND technology = '" . $tech ."' GROUP BY ttr_customer ORDER BY ttr_customer");
      } elseif ($mipa == "PA") {
        $cari = $this->db
                     ->query("SELECT ttr_customer, count(customer_name) FROM data_open WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from ttr_customer) = '". $month ."' AND mitra_pa != 'TA'  GROUP BY ttr_customer ORDER BY ttr_customer");
      } elseif ($mipa == "TA") {
        $cari = $this->db
                     ->query("SELECT ttr_customer, count(customer_name) FROM data_open WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from ttr_customer) = '". $month ."' AND mitra_pa = 'TA' GROUP BY ttr_customer ORDER BY ttr_customer");
      }
      return $cari->result();
    }

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
      return $query->result();
    }

    //FIBER
    function get_pa_fiber_date(){
      $query  = $this->db->query("SELECT ttr_customer, COUNT(customer_name) FROM data_open WHERE technology = 'Fiber' AND mitra_pa != 'TA' GROUP BY ttr_customer ORDER BY ttr_customer");
      return $query->result();
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

    //Get Total Data Close
    function get_total_data_close(){
      $this->db->from('data_close');
      $query  = $this->db->get();
      return $query->num_rows();
    }

    //Get Reported & Status All
    function get_data_retu(){
      $query = $this->db->select('reported_date')
               ->select('status_date')
               ->from('data_close')
               ->get();
      return $query->result();
    }

    //Get Data Close Fiber
    function get_total_data_close_f(){
      $query  = $this->db->select('*')
                         ->from('data_close')
                         ->where('technology', 'Fiber')
                         ->get();
      return $query->num_rows();
    }

    //Get Reported & Status Fiber
    function get_data_retu_fiber(){
      $query = $this->db->select('reported_date')
               ->select('status_date')
               ->from('data_close')
               ->where('technology', 'Fiber')
               ->get();
      return $query->result();
    }

    //Get Data Close Copper
    function get_total_data_close_c(){
      $query  = $this->db->select('*')
               ->from('data_close')
               ->where('technology', 'Fiber')
               ->get();
      return $query->num_rows();
    }

    //Get Reported & Status Copper
    function get_data_retu_copper(){
      $query = $this->db->select('reported_date')
               ->select('status_date')
               ->from('data_close')
               ->where('technology', 'Copper')
               ->get();
      return $query->result();
    }

    //FOR REPORT YEAR MONTH
    function get_this_month_close($kota, $month){
        $query  = $this->db->query("SELECT tgl_open, count(customer_name) FROM data_close WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from tgl_open) = '". $month ."' GROUP BY tgl_open ORDER BY tgl_open");
        return $query->result();
    }

    //FOR REPORT  MONTH
    function get_search_close($month, $mipa, $tech, $kota){
      if ($mipa == "all" && $tech == "all"){
        $cari2 = $this->db
                     ->query("SELECT tgl_open, count(customer_name) FROM data_close WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from tgl_open) = '". $month ."' GROUP BY tgl_open ORDER BY tgl_open");
      } elseif ($mipa == "all") {
        $cari2 = $this->db
                     ->query("SELECT tgl_open, count(customer_name) FROM data_close WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from tgl_open) = '". $month ."' AND technology = '" . $tech ."' GROUP BY tgl_open ORDER BY tgl_open");
      } elseif ($mipa == "PA") {
        $cari2 = $this->db
                     ->query("SELECT tgl_open, count(customer_name) FROM data_close WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from tgl_open) = '". $month ."' AND mitra_pa != 'TA'  GROUP BY tgl_open ORDER BY tgl_open");
      } elseif ($mipa == "TA") {
        $cari2 = $this->db
                     ->query("SELECT tgl_open, count(customer_name) FROM data_close WHERE witel LIKE '%". $kota ."%' AND EXTRACT(MONTH from tgl_open) = '". $month ."' AND mitra_pa = 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      }
      return $cari2->result();
    }

    //All Data by Date
    function get_all_data_date(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result();
    }

    //START TA BY DATE
    //COPPER
    function get_ta_copper_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Copper' AND mitra_pa = 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result();
    }

    //FIBER
    function get_ta_fiber_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Fiber' AND mitra_pa = 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result();
    }
    //END

    //START PA BY DATE
    //COPPER
    function get_pa_copper_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Copper' AND mitra_pa != 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result();
    }

    //FIBER
    function get_pa_fiber_date_close(){
      $query  = $this->db->query("SELECT tgl_open, COUNT(customer_name) FROM data_close WHERE technology = 'Fiber' AND mitra_pa != 'TA' GROUP BY tgl_open ORDER BY tgl_open");
      return $query->result();
    }
    //END 
  //END
  }

?>