<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerformAssurance extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('PerformAss');
    }

    function dateSub($tgl1, $tgl2){
		$tgl1 		= strtotime($tgl1);
		$tgl2 		= strtotime($tgl2);
		$diff_secs 	= abs($tgl1 - $tgl2);
		$base_year 	= min(date("Y", $tgl1), date("Y", $tgl2));
		$diff 		= mktime(0, 0, $diff_secs, 1, 1, $base_year);
		return array( "years" => date("Y", $diff) - $base_year, "months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1, "months" => date("n", $diff) - 1, "days_total" => floor($diff_secs / (3600 * 24)), "days" => date("j", $diff) - 1, "hours_total" => floor($diff_secs / 3600), "hours" => date("G", $diff), "minutes_total" => floor($diff_secs / 60), "minutes" => (int) date("i", $diff), "seconds_total" => $diff_secs, "seconds" => (int) date("s", $diff) );
	}

    public function index()
	{
		//CHARTS OPEN
		/*$tipe = array(array("1"=>$this->PerformAss->get_ta_copper_date()),array("2"=>$this->PerformAss->get_ta_fiber_date()),array("3"=>$this->PerformAss->get_pa_copper_date()),array("4"=>$this->PerformAss->get_pa_copper_date()));
		
		for($i = 0; $i < count($tipe); $i++){
			$chart = (object) [];
			$chart->cols = array((object) array("type" => "string"), (object) array("type" => "number"));/*
			$chart->rows = $tipe[$i][$i+1];
			$value = [];*/
			/*foreach ($chart->rows as $row) {
				$tempValue = (object)array("c"=>array((object)array("v"=>$row->ttr_customer),(object)array("v"=>$row->count)));
				array_push($value, $tempValue);
			}*/
			/*$chart->rows = $value;
			$data['chart'.$i] = json_encode($chart);
		}*/

		//CHARTS CLOSE
		/*$tipe2 = array(array("1"=>$this->PerformAss->get_ta_copper_date_close()),array("2"=>$this->PerformAss->get_ta_fiber_date_close()),array("3"=>$this->PerformAss->get_pa_fiber_date_close()),array("4"=>$this->PerformAss->get_pa_copper_date_close()));
		for($i = 0; $i < count($tipe2); $i++){
			$chart2 = (object) [];
			$chart2->cols = array((object) array("type" => "string"), (object) array("type" => "number"));
			$chart2->rows = $tipe2[$i][$i+1];
			$value = [];
			foreach ($chart2->rows as $row) {
				$tempValue = (object)array("c"=>array((object)array("v"=>$row->tgl_open),(object)array("v"=>$row->count)));
				array_push($value, $tempValue);
			}
			$chart2->rows = $value;
			$data['chart2'.$i] = json_encode($chart2);
		}*/
		//$data['chart'] = json_encode($chart);

		//MTTR ALL
		//$data['data_close'] 	= $this->PerformAss->get_total_data_close();
		/*$data['data_retu'] 		= $this->PerformAss->get_data_retu();

		$data['tot_dat'] 	= array();
		$total_waktu 		= 0;
		foreach($data['data_retu']  as $b) { 
				$date1 		= $b->reported_date;
				$date2		= $b->status_date;
				$a 			= $this->dateSub($date1, $date2);
				$selisih 	= $a['hours'] . ":" . $a['minutes']. ":" . $a['seconds'];

				array_push($data['tot_dat'], array("Reported Date"=>$date1, "Status Date"=>$date2, "Selisih"=>$selisih));

				//print_r($a);

				/*echo $date1 . "<br>";
				echo $date2 . "<br>";
				echo $selisih . "<br><br>";*/

				/*$total_waktu += $a['seconds_total'];
		}

		$seconds 	= floor($total_waktu/count($data['tot_dat']));
		$H 			= floor($seconds/3600);
		$i 			= ($seconds/60)%60;
		$s 			= $seconds%60;

		echo "MTTR ALL";
		echo sprintf("%02d:%02d:%02d", $H, $i, $s);*/

		//print_r($data);

		/*$total 	= date_diff($selisih);

		echo $total;*/


		//MTTR FIBER
		//$data['data_close_fiber'] = $this->PerformAss->get_total_data_close_f();
		$data['data_retu_fiber'] 	= $this->PerformAss->get_data_retu_fiber();

		$sel['tot_dat'] 	= array();
		$total_waktu 		= 0;
		$hitung 			= 0;
		foreach($data['data_retu_fiber']  as $b) { 
				$date1 		= $b->reported_date;
				$date2		= $b->status_date;
				$a 			= $this->dateSub($date1, $date2);
				$selisih 	= $a['hours'] . ":" . $a['minutes']. ":" . $a['seconds'];

				array_push($sel['tot_dat'], array("Reported Date"=>$date1, "Status Date"=>$date2, "Selisih"=>$selisih));

				if ($a['hours'] > 48) {
					$hitung++;
				}

				//print_r($a);

				/*echo $date1 . "<br>";
				echo $date2 . "<br>";
				echo $selisih . "<br><br>";*/

				/*$total_waktu += $a['seconds_total'];*/
		}

		/*$seconds 	= floor($total_waktu/count($data['tot_dat']));
		$H 			= floor($seconds/3600);
		$i 			= ($seconds/60)%60;
		$s 			= $seconds%60;

		echo "MTTR Fiber";
		echo sprintf("%02d:%02d:%02d", $H, $i, $s);*/

		//MTTR COPPER
		//$data['data_close_copper'] 	= $this->PerformAss->get_total_data_close_c();
		/*$data['data_retu_copper'] 	= $this->PerformAss->get_data_retu_copper();

		$data['tot_dat'] 	= array();
		$total_waktu 		= 0;
		foreach($data['data_retu_copper']  as $b) { 
				$date1 		= $b->reported_date;
				$date2		= $b->status_date;
				$a 			= $this->dateSub($date1, $date2);
				$selisih 	= $a['hours'] . ":" . $a['minutes']. ":" . $a['seconds'];

				array_push($data['tot_dat'], array("Reported Date"=>$date1, "Status Date"=>$date2, "Selisih"=>$selisih));*/

				//print_r($a);

				/*echo $date1 . "<br>";
				echo $date2 . "<br>";
				echo $selisih . "<br><br>";*/

				/*$total_waktu += $a['seconds_total'];
		}

		$seconds 	= floor($total_waktu/count($data['tot_dat']));
		$H 			= floor($seconds/3600);
		$i 			= ($seconds/60)%60;
		$s 			= $seconds%60;

		echo "MTTR COPPER";
		echo sprintf("%02d:%02d:%02d", $H, $i, $s);*/

		/*echo "<pre>";
		print_r($sel);
		echo "</pre>";*/

		echo $hitung;

		/*$this->load->view('header');
		$this->load->view('dash_perform_assurance');
		$this->load->view('footer');*/
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

	public function get_pa_copper(){
      $kota = array("Madiun", "Malang", "Kediri", "Jember", "Pasuruan");
        /*for ($i = 0; $i < count($kota); $i++){
          /*$query = $this->db->query("SELECT * FROM data_open WHERE witel LIKE '%" . $kota[$i] . "%' AND mitra_pa != 'TA' AND technology = 'Copper'");
          $query = $this->db->select('*')
                    ->from('data_open')
                    ->where('mitra_pa', 'TA')
                    ->where('technology','Copper')
                    ->like('witel', '$kota[$i]')
                    ->get_compiled_select();
          $rekap['PA_Copper'.$kota[$i]] = $query->num_rows();
    	}*/

    	$lihat['halo'] = $this->PerformAss->get_pa_fiber_date_close();

    	echo "<pre>";
    	print_r($lihat);
    	echo "</pre>";
    }

    public function report_open_month(){
    	$today 	= time(); //get today
    	$full 	= date("Y-m-d", $today); //get date
    	$month 	= date("m", $today); //get month

    	$kota  = array(1=>"MADIUN","MALANG","KEDIRI","JEMBER","PASURUAN");
	    for($i = 1; $i <= count($kota); $i++){
	        $data[$kota[$i]] = $this->PerformAss->get_this_month($kota[$i], $month);
	    }

	    echo "<pre>";
	    print_r($data);
	    echo "</pre>";

    	/*$this->load->view('header');
		$this->load->view('report_open_month', $data);
		$this->load->view('footer');*/
    }

    public function rom(){
		$month 		= $this->input->post('bln');
		$mipa 		= $this->input->post('mipa');
		$tech 		= $this->input->post('tech');

    	$kota  = array(1=>"MADIUN","MALANG","KEDIRI","JEMBER","PASURUAN");
	    for($i = 1; $i <= count($kota); $i++){
	        $data[$kota[$i]] = $this->PerformAss->get_search($month, $mipa, $tech, $kota[$i]);
	    }

	    echo "<pre>";
	    print_r($data);
	    echo "</pre>";

		/*$this->load->view('header');
		$this->load->view('report_close_month', $data);
		$this->load->view('footer');*/
	}

    public function report_open_yeartodate(){
    	$this->load->view('header');
		$this->load->view('report_open_yeartodate');
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
		print_r($data);
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

	public function all(){
		//$data['all_month'] = $this->PerformAss->get_all_month();

		$kota  = array("MADIUN","MALANG","KEDIRI","JEMBER","PASURUAN");
	      for($i = 0; $i < count($kota); $i++){
	        $data[$kota[$i]] = $this->PerformAss->get_all_month($kota[$i]);
	    }

		echo "<pre>";
		print_r($data);
		echo "</pre>";
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

	public function get_data_row(){
		$mitra_pa 	= $this->input->post('mitra_pa');
		$tech		= $this->input->post('tech');
		$row		= $this->input->post('row');

		if ($mitra_pa == "all" && $tech == "all" && $row = "all") {
			//ALL DATA DATE 
			$data['Data_by_Date'] = $this->PerformAss->get_all_data_date();
			//END

			$this->load->view('header');
			$this->load->view('report_close', $data);
			$this->load->view('footer');
		}
	}

	public function report_close_month(){
		$today 	= time(); //get today
    	$full 	= date("Y-m-d", $today); //get date
    	$month 	= date("m", $today); //get month

    	$kota  = array(1=>"MADIUN","MALANG","KEDIRI","JEMBER","PASURUAN");
	    for($i = 1; $i <= count($kota); $i++){
	        $data[$kota[$i]] = $this->PerformAss->get_this_month_close($kota[$i], $month);
	    }

	    /*echo "<pre>";
	    print_r($data);
	    echo "</pre>";*/

		$this->load->view('header');
		$this->load->view('report_close_month', $data);
		$this->load->view('footer');
	}

	public function rom_close(){
		$month 		= $this->input->post('bln');
		$mipa 		= $this->input->post('mipa');
		$tech 		= $this->input->post('tech');

		/*echo $month."<br>";
		echo $mipa."<br>";
		echo $tech."<br>";*/

		$kota  = array(1=>"MADIUN","MALANG","KEDIRI","JEMBER","PASURUAN");
	    for($i = 1; $i <= count($kota); $i++){
	        $data[$kota[$i]] = $this->PerformAss->get_search_close($month, $mipa, $tech, $kota[$i]);
	    }

	    echo "<pre>";
	    print_r($data);
	    echo "</pre>";

		/*$this->load->view('header');
		$this->load->view('report_close_month', $data);
		$this->load->view('footer');*/
	}

	public function report_close_yeartodate(){
		$this->load->view('header');
		$this->load->view('report_close_yeartodate');
		$this->load->view('footer');
	}

	public function report_close()
	{
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

		/*$rekap['Ta_Copper_Date_Close'] = $this->PerformAss->get_ta_copper_date_close();
		$this->load->view('try_something', $rekap);*/

		$this->load->view('header');
		$this->load->view('report_close', $data);
		$this->load->view('footer');
	}

}