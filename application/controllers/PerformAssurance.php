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
		$this->load->view('perform_assurance', $data);
		//$this->load->view('tables');
		$this->load->view('footer');
	}
}