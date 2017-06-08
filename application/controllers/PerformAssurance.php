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
		$this->load->view('header');
		$this->load->view('dash_perform_assurance');
		$this->load->view('footer');
	}

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

		//print_r($data);

		$this->load->view('header');
		$this->load->view('report_open', $data);
		//$this->load->view('tables');
		$this->load->view('footer');
	}

	public function count_ofw(){
		$data['data_ttrcustomer'] = $this->PerformAss->get_all_ttr();
		foreach ($data_ttrcustomer as $a) {
			$ttr = $data_ttrcustomer['ttr_customer'];
		}
	}

	public function pa_coop_mdn(){
		$query = $this->db->query('SELECT * FROM my_table');

		echo $query->num_rows();
	}
}