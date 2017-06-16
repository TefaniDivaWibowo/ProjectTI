<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RevRekon extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('RevModel');
    }

	public function index()
	{
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all();
		$this->load->view('rev_target_ass');
		$this->load->view('footer');
	}

	public function rekon(){
		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_all();
		$this->load->view('table_ass_cek', $data);
		$this->load->view('footer');
	}

	public function data_dikerjakan(){
		$this->load->view('header');
		// $data['psb'] = $this->RevModel->get_all();
		$this->load->view('rev_dikerjakan');
		$this->load->view('footer');
	}

	public function cari_dikerjakan(){		
		$kt = $this->input->post('kategori');
		$ka  = $this->input->post('area');
		$ni = $this->input->post('no_inet');

		$this->load->view('header');
		$data['psb'] = $this->RevModel->get_kerja($kt, $ka, $ni);
		$this->load->view('rev_dikerjakan', $data);
		$this->load->view('footer');
	}

	public function cari_data()
	{
		$this->load->view('header');
		$this->load->view('rev_base_date');
		$this->load->view('footer');
	}

	public function cari_hasil()
	{
		$kt 		= $this->input->post('kategori');
		$ka 		= $this->input->post('area');
		$tgl1 		= $this->input->post('tanggal1');
		$bln1		= $this->input->post('bulan1');
		$thn1		= $this->input->post('tahun1');
		$tgl2 		= $this->input->post('tanggal2');
		$bln2		= $this->input->post('bulan2');
		$thn2		= $this->input->post('tahun2');
		$this->load->view('header');
		$data['cari'] 	= $this->RevModel->get_search($kt, $ka, $tgl1, $bln1, $thn1, $tgl2, $bln2, $thn2);
		$this->load->view('rev_base_date', $data);
		$this->load->view('footer');
	}
}