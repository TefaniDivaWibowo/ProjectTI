<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerformAssurance extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('search');
    }

    public function index()
	{
		$this->load->view('header');
		$this->load->view('perform_assurance');
		$this->load->view('footer');
	}

}