<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchSN extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('search');
    }

	public function index()
	{
		$data['data_sn'] 	= $this->search->get_all_data();
		$this->load->view('header');
		$this->load->view('search_sn', $data);
		$this->load->view('footer');
	}

	public function coba()
	{
		$data['data_sn'] 	= $this->search->get_all_data();
		$this->load->view('data', $data);
	}

	public function search_sn()
	{
		$sn 		= $this->input->post('sn');
		$vendor 	= $this->input->post('vendor');
		$results 	= $this->search->get_search_data($sn, $vendor);
		$no = 1;
		foreach ($results as $result) {
			echo '<tr>
		    <td>'.$no.'</td>
		    <td>'.$result["SN"].'</td>
		    <td>'.$result["Nama_Vendor"].'</td>
	    	</tr>';
	    	$no++;
		}

		  /*echo "<pre>";
	      print_r($result);
	      echo "</pre>";*/

		/*$this->load->view('header');
		$this->load->view('search_sn', $data);
		$this->load->view('footer');*/
	}

	public function search_vendor()
	{
		$vendor 	= $this->input->post('vendor');

		$data['data_sn']	= $this->search->get_search_data_vendor($vendor);

		  /*echo "<pre>";
	      print_r($data);
	      echo "</pre>";*/

		$this->load->view('search_sn', $data);
	}
}