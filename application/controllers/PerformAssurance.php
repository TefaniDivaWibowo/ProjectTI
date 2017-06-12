<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerformAssurance extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('PerformAss');
    }

    public function index()
	{
		//START TA COPPER DATE 
		$tipe = array(array("1"=>$this->PerformAss->get_ta_copper_date()),array("2"=>$this->PerformAss->get_ta_fiber_date()));
		
		for($i = 0; $i < count($tipe); $i++){
			$chart = (object) [];
			$chart->cols = array((object) array("type" => "string"), (object) array("type" => "number"));
			$chart->rows = $tipe[$i][$i+1];
			$value = [];
			foreach ($chart->rows as $row) {
				$tempValue = (object)array("c"=>array((object)array("v"=>$row->ttr_customer),(object)array("v"=>$row->count)));
				array_push($value, $tempValue);
			}
			$chart->rows = $value;
			$data['chart'.$i] = json_encode($chart);
		}
		
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		// echo "<pre>";
		$data['chart'] = json_encode($chart);
		// print_r($chart);
		// echo "</pre>";

		$this->load->view('header');
		$this->load->view('dash_perform_assurance', $data);
		$this->load->view('footer', $data);
	}

	//START OPEN

	public function open()
	{
		$data['data_open'] 	= $this->PerformAss->get_all_data();

		$this->load->view('header');
		$this->load->view('data_open', $data);
		//$this->load->view('tables');
		$this->load->view('footer');
	}

	public function report_open()
	{
		//START PA COPPER
		/*$kota = array("Madiun", "Malang", "Kediri", "Jember", "Pasuruan");
	      for ($i = 0; $i < count($kota); $i++){
	        $query = $this->db->select('*')
	                          ->from("data_open")
	                          ->like('witel', 'Madiun')
	                          ->where('mitra_pa !=', 'TA')
	                          ->where('technology','Copper')
	                          ->get();
	        $rekap['PA_Copper'.$kota[$i]] = $query->num_rows();
	        //return $rekap['Fiber_'.$kota[$i]];
	      }*/

	    /*echo "<pre>";
		print_r($rekap);
		echo "</pre>";*/

		//$rekap['PA_Copper'] = $this->PerformAss->get_pa_copper();

		/*$this->db->query("SELECT * FROM data_open WHERE witel LIKE '%$kota[$i]%' AND mitra_pa != 'TA' AND 	technology = 'Copper'");*/

		//PA Copper Madiun
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MADIUN%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Madiun'] = $query->num_rows();

		//PA Copper Malang
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MALANG%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Malang'] = $query->num_rows();

		//PA Copper Kediri
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%KEDIRI%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Kediri'] = $query->num_rows();

		//PA Copper Jember
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%JEMBER%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Jember'] = $query->num_rows();

		//PA Copper Pasuruan
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%PASURUAN%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Pasuruan'] = $query->num_rows();		

		//END PA COPPER
		//START PA FO

		//PA FO Madiun
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MADIUN%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Madiun'] = $query->num_rows();

		//PA FO Malang
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MALANG%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Malang'] = $query->num_rows();

		//PA FO Kediri
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%KEDIRI%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Kediri'] = $query->num_rows();

		//PA FO Jember
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%JEMBER%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Jember'] = $query->num_rows();

		//PA FO Pasuruan
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%PASURUAN%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Pasuruan'] = $query->num_rows();

		//END PA FO
		//START TA COPPER

		//TA COPPER Madiun
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MADIUN%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_MadiunTA'] = $query->num_rows();

		//TA COPPER Malang
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MALANG%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_MalangTA'] = $query->num_rows();

		//TA COPPER Kediri
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%KEDIRI%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_KediriTA'] = $query->num_rows();

		//TA COPPER Jember
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%JEMBER%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_JemberTA'] = $query->num_rows();

		//TA COPPER Pasuruan
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%PASURUAN%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_PasuruanTA'] = $query->num_rows();

		//END TA COPPER
		//START TA FO

		//TA FO Madiun
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MADIUN%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_MadiunTA'] = $query->num_rows();

		//TA FO Malang
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%MALANG%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_MalangTA'] = $query->num_rows();

		//TA FO Kediri
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%KEDIRI%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_KediriTA'] = $query->num_rows();

		//TA FO Jember
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%JEMBER%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_JemberTA'] = $query->num_rows();

		//TA FO Pasuruan
		$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%PASURUAN%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_PasuruanTA'] = $query->num_rows();

		//END TA FO
		//START TA COPPER DATE 
		$data['Ta_Copper_Date'] = $this->PerformAss->get_ta_copper_date();
		//END
		//START TA FIBER DATE 
		$data['Ta_Fiber_Date'] = $this->PerformAss->get_ta_fiber_date();
		//END
		//START PA COPPER DATE 
		$data['Pa_Copper_Date'] = $this->PerformAss->get_pa_copper_date();
		//END
		//START PA FIBER DATE 
		$data['Pa_Fiber_Date'] = $this->PerformAss->get_pa_fiber_date();
		//END 

		/*echo "<pre>";
		print_r($rekap);
		echo "</pre>";*/

		$this->load->view('header');
		$this->load->view('report_open', $data);
		$this->load->view('footer');
	}

	public function count_ofw(){
		$data['data_ttrcustomer'] = $this->PerformAss->get_all_ttr();
		foreach ($data_ttrcustomer as $a) {
			$ttr = $data_ttrcustomer['ttr_customer'];
		}
	}

	//END OPEN
	//START CLOSE

	public function close()
	{
		$data['data_close'] 	= $this->PerformAss->get_all_data_close();
		$this->load->view('header');
		$this->load->view('data_close', $data);
		//$this->load->view('tables');
		$this->load->view('footer');
	}

	public function report_close()
	{
		//START TA COPPER DATE 
		$data['Data_by_Date'] = $this->PerformAss->get_all_data_date();
		//END

		//START PA COPPER

		//PA Copper Madiun
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MADIUN%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Madiun'] = $query->num_rows();

		//PA Copper Malang
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MALANG%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Malang'] = $query->num_rows();

		//PA Copper Kediri
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%KEDIRI%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Kediri'] = $query->num_rows();

		//PA Copper Jember
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%JEMBER%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Jember'] = $query->num_rows();

		//PA Copper Pasuruan
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%PASURUAN%' AND mitra_pa != 'TA' AND technology = 'Copper'");
		$data['Copper_Pasuruan'] = $query->num_rows();		

		//END PA COPPER
		//START PA FO

		//PA FO Madiun
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MADIUN%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Madiun'] = $query->num_rows();

		//PA FO Malang
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MALANG%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Malang'] = $query->num_rows();

		//PA FO Kediri
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%KEDIRI%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Kediri'] = $query->num_rows();

		//PA FO Jember
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%JEMBER%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Jember'] = $query->num_rows();

		//PA FO Pasuruan
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%PASURUAN%' AND mitra_pa != 'TA' AND technology = 'Fiber'");
		$data['Fiber_Pasuruan'] = $query->num_rows();

		//END PA FO
		//START TA COPPER

		//TA COPPER Madiun
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MADIUN%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_MadiunTA'] = $query->num_rows();

		//TA COPPER Malang
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MALANG%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_MalangTA'] = $query->num_rows();

		//TA COPPER Kediri
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%KEDIRI%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_KediriTA'] = $query->num_rows();

		//TA COPPER Jember
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%JEMBER%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_JemberTA'] = $query->num_rows();

		//TA COPPER Pasuruan
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%PASURUAN%' AND mitra_pa = 'TA' AND technology = 'Copper'");
		$data['Copper_PasuruanTA'] = $query->num_rows();

		//END TA COPPER
		//START TA FO

		//TA FO Madiun
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MADIUN%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_MadiunTA'] = $query->num_rows();

		//TA FO Malang
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%MALANG%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_MalangTA'] = $query->num_rows();

		//TA FO Kediri
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%KEDIRI%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_KediriTA'] = $query->num_rows();

		//TA FO Jember
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%JEMBER%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_JemberTA'] = $query->num_rows();

		//TA FO Pasuruan
		$query = $this->db->query("SELECT * FROM data_close WHERE witel LIKE '%PASURUAN%' AND mitra_pa = 'TA' AND technology = 'Fiber'");
		$data['Fiber_PasuruanTA'] = $query->num_rows();

		//END TA FO
		//START TA COPPER DATE 
		$data['Ta_Copper_Date_Close'] = $this->PerformAss->get_ta_copper_date_close();
		//END
		//START TA FIBER DATE 
		$data['Ta_Fiber_Date_Close'] = $this->PerformAss->get_ta_fiber_date_close();
		//END
		//START PA COPPER DATE 
		$data['Pa_Copper_Date_Close'] = $this->PerformAss->get_pa_copper_date_close();
		//END
		//START PA FIBER DATE 
		$data['Pa_Fiber_Date_Close'] = $this->PerformAss->get_pa_fiber_date_close();
		//END 

		/*echo "<pre>";
		print_r($rekap);
		echo "<pre>";*/

		$this->load->view('header');
		$this->load->view('report_close', $data);
		$this->load->view('footer');
	}

}