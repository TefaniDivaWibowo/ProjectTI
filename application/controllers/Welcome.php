<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('mymodel');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('table_psb');
		$this->load->view('footer');
	}

}
