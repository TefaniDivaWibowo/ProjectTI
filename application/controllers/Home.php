<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('mymodel');
    }

	public function index()
	{
		$this->load->view('form_psb');
	}

	public function tampil()
	{
		$data['psb'] = $this->mymodel->get_all();
		$this->load->view('table_psb', $data);
	}

	public function insert_psb()
	{
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

		// echo $b_lay."<br>";
		// echo $b_tiang."<br>";
		// echo $b_stb."<br>";
		// echo $b_kab_add."<br>";
		// echo $b_pc_add."<br>";
		// echo $b_tiang_j."<br>";
		// echo $b_tiang_m."<br>";

		$biaya = $b_lay+$b_kab_add+$b_pc_add+$b_utp_add+$b_stb+$b_tiang;
		// echo "<br>".$biaya;

        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('ba_psb'))
                {
                        $error = array('error' => $this->upload->display_errors());
        				echo "<script>alert('Data berhasil ditambahkan')</script>";
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
        				echo "<script>alert('Data berhasil ditambahkan')</script>";
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
            'ba_psb' 		=> $this->input->post('ba_psb'),
            'biaya' 		=> $biaya
             );
        $this->mymodel->Add($data);
        redirect(base_url(),'refresh');
	}
}
