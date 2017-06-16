<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revenue extends CI_Controller {

	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('RevModel');
      // $this->load->model('PerformAss');
    }

	public function index(){
		$tipe = array(array("1"=>$this->RevModel->get_dt_psb()));
		
		for($i = 0; $i < count($tipe); $i++){
			$chart = (object) [];
			$chart->cols = array((object) array("type" => "string"), (object) array("type" => "number"));
			$chart->rows = $tipe[$i][$i+1];
			$value = [];
			foreach ($chart->rows as $row) {
				$tempValue = (object)array("c"=>array((object)array("v"=>$row->tgl_ps),(object)array("v"=>$row->harga)));
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
		$this->load->view('home_rev', $data);
		$this->load->view('footer', $data);
	}

	// Coba-coba desain saja
	public function coba_desain(){
		$this->load->view('header');
		$this->load->view('desain');
		$this->load->view('footer');
	}

	public function form_psb(){
		$this->load->view('header');
		$this->load->view('form_psb');
		$this->load->view('footer');
	}
	
	public function data_psb(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all_psb();
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		$data['rev'] = $this->RevModel->get_psb();
		$this->load->view('table_psb', $data);
		$this->load->view('footer');
	}

	public function form_ass(){
		$this->load->view('header');
		$this->load->view('form_ass');
		$this->load->view('footer');
	}
	
	public function data_ass(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all_ass();
		$data['rev'] = $this->RevModel->get_ass();
		$this->load->view('table_ass', $data);
		$this->load->view('footer');
	}

	public function migrasi(){
		$this->load->view('header');
		$this->load->view('form_migrasi');
		$this->load->view('footer');
	}
	
	public function data_migrasi(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all_migrasi();
		$data['rev'] = $this->RevModel->get_migrasi();
		$this->load->view('table_migrasi', $data);
		$this->load->view('footer');
	}

	public function mainis(){
		$this->load->view('header');
		$this->load->view('mainis');
		$this->load->view('footer');
	}

	public function data_mainis(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all_mainis();
		$data['rev'] = $this->RevModel->get_mainis();
		$this->load->view('table_mainis', $data);
		$this->load->view('footer');
	}

	public function form_main_access(){
		$this->load->view('header');
		$this->load->view('main_access');
		$this->load->view('footer');
	}

	public function data_main_access(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all_main_access();
		$data['rev'] = $this->RevModel->get_main_access();
		$this->load->view('data_main_access', $data);
		$this->load->view('footer');
	}

	public function form_gamas(){
		$this->load->view('header');
		$this->load->view('gamas');
		$this->load->view('footer');
	}

	public function data_gamas(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all_gamas();
		$data['rev'] = $this->RevModel->get_gamas();
		$this->load->view('table_gamas', $data);
		$this->load->view('footer');
	}

	public function pt3(){
		$this->load->view('header');
		$this->load->view('form_pt3');
		$this->load->view('footer');
	}

	public function nodeb(){
		$this->load->view('header');
		$this->load->view('form_nodeb');
		$this->load->view('footer');
	}

	public function hem(){
		$this->load->view('header');
		$this->load->view('form_hem');
		$this->load->view('footer');
	}

	public function pt2(){
		$this->load->view('header');
		$this->load->view('form_pt2');
		$this->load->view('footer');
	}

	public function data_sd(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all_sd();
		$data['rev'] = $this->RevModel->get_sd();
		$this->load->view('table_sd', $data);
		$this->load->view('footer');
	}

	public function insert_psb(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
				
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'psb'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/data_psb'),'refresh');
	}

	public function insert_ass(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'ggn'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/data_ass'),'refresh');
	}

	public function insert_migrasi(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'migrasi'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/data_migrasi'),'refresh');
	}

	public function insert_mainis(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'mainis'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/data_mainis'),'refresh');
    }

    public function insert_main_access(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'main_access'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/data_main_access'),'refresh');
    }

    public function insert_gamas(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'gamas'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/data_gamas'),'refresh');
    }
	
	public function insert_pt3(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'pt3'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/pt3'),'refresh');
    }

	public function insert_nodeb(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'nodeb'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/nodeb'),'refresh');
    }
	
	public function insert_hem(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'hem'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/hem'),'refresh');
    }
	
	public function insert_pt2(){
		$p_kab = $this->input->post('panjang_kabel');
		$p_pc  = $this->input->post('patch_cord');
		$p_utp = $this->input->post('kabel_utp');
		$lay = $this->input->post('layanan');
		$stb = $this->input->post('stb_kedua');
		$tiang = $this->input->post('tiang');

		if($p_kab > 100){
			$p_kab_add = $p_kab - 100;
			$b_kab_m = $p_kab_add*5200;
			$b_kab_j = $p_kab_add*3733;
			$b_kab_add = $b_kab_m+$b_kab_j;
		} else{
			$p_kab_add = 0;
			$b_kab_add = 0;
		}

		if($p_pc > 2){
			$p_pc_add = $p_pc - 2;
			$b_pc_add = $p_pc_add*7418;
		} else{
			$p_pc_add = 0;
			$b_pc_add = 0;
		}

		if($p_utp > 2){
			$p_utp_add = $p_utp - 2;
			$b_utp_add = $p_utp_add*7667;
		} else{
			$p_utp_add = 0;
			$b_utp_add = 0;
		}

		if($lay== 1){
			$b_lay = 1037553;
		} elseif($lay== 2){
			$b_lay = 1115159;
		} else{
			$b_lay = 1155613; 
		}
		
		if($stb == 0){
			$b_stb = 0;
		} else{			
			$b_stb = $stb*98045;
		}

		if($tiang == 0){
			$b_tiang = 0;
		} else{			
			$b_tiang_m = $tiang*1062706;
			$b_tiang_j = $tiang*172387;
			$b_tiang = $b_tiang_m+$b_tiang_j;
		}

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;

				$inti = $_FILES['ba_psb']['name'];
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf|jpg|png|doc|docx';

                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload('ba_psb')) {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Berita acara berhasil di-upload')</script>";
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Berita acara berhasil ditambahkan')</script>";
                }

        echo "<script>alert('Data berhasil ditambahkan')</script>";

        $data = array(
            'mdf' 			=> $this->input->post('mdf'),
            'wilayah'		=> $this->input->post('wilayah'),
            'nomor_pots' 	=> $this->input->post('nomor_pots'),
            'nomor_speedy' 	=> $this->input->post('nomor_speedy'),
            'nama' 			=> $this->input->post('nama'),
            'alamat' 		=> $this->input->post('alamat'),
            'odp' 			=> $this->input->post('odp'),
            'ont' 			=> $this->input->post('ont'),
            'stb' 			=> $this->input->post('stb'),
            'layanan' 		=> $lay,
            'jenis_kabel' 	=> $this->input->post('jenis_kabel'),
            'panjang_kabel' => $p_kab,
            'kelebihan_kabel' => $p_kab_add,
            'tiang' 		=> $tiang,
            'patch_cord' 	=> $p_pc,
            'patch_cord_add'=> $p_pc_add,
            'kabel_utp' 	=> $p_utp,
            'kabel_utp_add' => $p_utp_add,
            'kabel_pvc' 	=> $this->input->post('kabel_pvc'),
            'stb_kedua' 	=> $stb,
            'tgl_va' 		=> $this->input->post('tgl_va'),
            'tgl_ps' 		=> $this->input->post('tgl_ps'),
            'hasil_cek_redaman' => $this->input->post('hasil_cek_redaman'),
            'ba_rev' 		=> $inti,
            'biaya' 		=> $biaya,
            'divisi' 		=> 'pt2'
             );
        $this->RevModel->Add($data);
        redirect(base_url('index.php/Revenue/pt2'),'refresh');
    }

}
