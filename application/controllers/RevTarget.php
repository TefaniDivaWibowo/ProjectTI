<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RevTarget extends CI_Controller {
	function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('RevModel');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('rev_target_ass');
		$this->load->view('footer');
	}

	public function target_ass()
	{
		$kt = 'ass';
		$this->load->view('header');
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('rev_target_ass', $data);
		$this->load->view('footer');
	}

	public function tambah_target_ass()
	{
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'ass'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_ass'),'refresh');
	}

	public function target_psb()
	{
		$kt = 'psb';
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('header');
		$this->load->view('rev_target_ass', $data);
		$this->load->view('footer');
	}

	public function tambah_target_psb()
	{
		/*$data = array(
            'nominal' 		=> $this->input->post('target'),
            'divisi'		=> 'psb'
            );
        $this->RevModel->add_target($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect(base_url('index.php/RevTarget/target_psb'),'refresh');*/
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'psb'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_psb'),'refresh');

	}

	public function target_mig()
	{
		$kt = 'mig';
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('header');
		$this->load->view('rev_target_mig', $data);
		$this->load->view('footer');
	}

	public function tambah_target_mig()
	{
		/*$data = array(
            'nominal' 		=> $this->input->post('target'),
            'divisi'		=> 'mig'
            );
        $this->RevModel->add_target($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect(base_url('index.php/RevTarget/target_mig'),'refresh');*/
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'mig'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_mig'),'refresh');
	}

	public function target_pt2()
	{
		$kt = 'pt2';
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('header');
		$this->load->view('rev_target_pt2', $data);
		$this->load->view('footer');
	}

	public function tambah_target_pt2()
	{
		/*$data = array(
            'nominal' 		=> $this->input->post('target'),
            'divisi'		=> 'pt2'
            );
        $this->RevModel->add_target($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect(base_url('index.php/RevTarget/target_pt2'),'refresh');*/
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'pt2'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_pt2'),'refresh');
	}

	public function target_pt3()
	{
		$kt = 'pt3';
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('header');
		$this->load->view('rev_target_pt3', $data);
		$this->load->view('footer');
	}

	public function tambah_target_pt3()
	{
		/*$data = array(
            'nominal' 		=> $this->input->post('target'),
            'divisi'		=> 'pt3'
            );
        $this->RevModel->add_target($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect(base_url('index.php/RevTarget/target_pt3'),'refresh');*/
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'pt3'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_pt3'),'refresh');
	}

	public function target_dma()
	{
		$kt = 'dma';
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('header');
		$this->load->view('rev_target_dma', $data);
		$this->load->view('footer');
	}

	public function tambah_target_dma()
	{
		/*$data = array(
            'nominal' 		=> $this->input->post('target'),
            'divisi'		=> 'dma'
            );
        $this->RevModel->add_target($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect(base_url('index.php/RevTarget/target_dma'),'refresh');*/
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'dma'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_dma'),'refresh');
	}

	public function target_gamas()
	{
		$kt = 'gamas';
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('header');
		$this->load->view('rev_target_gamas', $data);
		$this->load->view('footer');
	}

	public function tambah_target_gamas()
	{
		/*$data = array(
            'nominal' 		=> $this->input->post('target'),
            'divisi'		=> 'gamas'
            );
        $this->RevModel->add_target($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect(base_url('index.php/RevTarget/target_gamas'),'refresh');*/
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'gamas'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_gamas'),'refresh');
	}

	public function target_mis()
	{
		$kt = 'mis';
		$data['rev'] = $this->RevModel->get_target($kt);
		$this->load->view('header');
		$this->load->view('rev_target_mis', $data);
		$this->load->view('footer');
	}

	public function tambah_target_mis()
	{
		/*$data = array(
            'nominal' 		=> $this->input->post('target'),
            'divisi'		=> 'mis'
            );
        $this->RevModel->add_target($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect(base_url('index.php/RevTarget/target_mis'),'refresh');*/
		$data = array(
            'nominal' 		=> $this->input->post('target')
            );
		$where = array(
            'divisi'		=> 'mis'
    		);
        $this->RevModel->Update('data_target_rev', $data, $where);
        echo "<script>alert('Data target revenue berhasil diperbaharui')</script>";
        redirect(base_url('index.php/RevTarget/target_mis'),'refresh');
	}
}