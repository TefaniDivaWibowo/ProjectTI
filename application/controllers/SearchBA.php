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

		// echo "<script>alert('".$kt.$isi."')</script>";
	}

}