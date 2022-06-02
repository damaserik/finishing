<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Camlap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cambric');
		$this->load->model('M_master');
		$this->load->helper(array('url','form','file'));
	}

	public function index()
	{
		$c['content'] = $this->load->view('finishing/content');
		$this->load->view('finishing/dashboard',$c);
	}
//***********************************************************************************************************************************************************
	// ============================================================= LAPORAN MUTASI CAMBRIC ==================================================================
	// ========================================== LAPORAN MUTASI CAMBRIC =========================================
	// Fungsi View Grey CAMBRIC
	public function view_camlap()
	{		
		// $data['get_jenis'] = $this->M_master->get_kdjenis();
		// $data['get_group'] = $this->M_master->get_kdgroup();
		// $data['isi'] = $this->M_cambric->view_camlap();
		$h = $this->load->view('finishing/dashboard');
		$c['content'] = $this->load->view('finishing/cambric/lap/laporan', $h);
	}
}

/* End of file  */
/* Location: ./application/Camlap/ */