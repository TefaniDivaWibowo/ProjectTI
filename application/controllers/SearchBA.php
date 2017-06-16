<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchBA extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('cari');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('search_ba');
		$this->load->view('footer');
	}

	public function coba()
	{
		$this->load->view('header');
		$data['cari'] 	= $this->cari->get_all_data();
		$this->load->view('search_ba', $data);
		$this->load->view('footer');
	}

	public function cari_ba()
	{
		$kt 		= $this->input->post('kategori');
		$isi		= $this->input->post('data_cari');
		$this->load->view('header');
		$data['cari'] 	= $this->cari->get_search_data($kt, $isi);
		$this->load->view('search_ba', $data);
		$this->load->view('footer');
	}

	public function cari_data()
	{
		$this->load->view('header');
		$this->load->view('search_data');
		$this->load->view('footer');
	}

	public function cari_hasil()
	{
		$kt 		= $this->input->post('kategori');
		$tgl1 		= $this->input->post('tanggal1');
		$bln1		= $this->input->post('bulan1');
		$thn1		= $this->input->post('tahun1');
		$tgl2 		= $this->input->post('tanggal2');
		$bln2		= $this->input->post('bulan2');
		$thn2		= $this->input->post('tahun2');
		$this->load->view('header');
		$data['cari'] 	= $this->cari->get_search($kt, $tgl1, $bln1, $thn1, $tgl2, $bln2, $thn2);
		$this->load->view('search_data', $data);
		$this->load->view('footer');
	}

	public function cari_hasil_lama()
	{
		$kt 		= $this->input->post('kategori');
		$tgl 		= $this->input->post('tanggal');
		$bln		= $this->input->post('bulan');
		$thn		= $this->input->post('tahun');
		$this->load->view('header');
		$data['cari'] 	= $this->cari->get_search($kt, $tgl, $bln, $thn);
		$this->load->view('search_data', $data);
		$this->load->view('footer');
	}

	public function cari_rekon()
	{
		$kt 		= $this->input->post('kategori');
		$ka 		= $this->input->post('area');
		$this->load->view('header');
		$data['psb'] = $this->cari->get_dt_rekon($kt, $ka);
		$data['rev'] = $this->cari->get_revenue($kt, $ka);
		$this->load->view('table_ass_cek', $data);
		$this->load->view('footer');
	}

}