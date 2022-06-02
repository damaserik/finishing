<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Greylap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_grey');
		$this->load->model('M_master');
		$this->load->helper(array('url','form','file'));
	}

	public function index()
	{
		$c['content'] = $this->load->view('finishing/content');
		$this->load->view('finishing/dashboard',$c);
	}
//***********************************************************************************************************************************************************
	// ============================================================= LAPORAN MUTASI GREY ====================================================================
	// ========================================== LAPORAN MUTASI GREY =========================================
	// Fungsi View Grey WO
	public function view_greylap()
	{		
		// $data['get_jenis'] = $this->M_master->get_kdjenis();
		// $data['get_group'] = $this->M_master->get_kdgroup();
		$data['isi'] = $this->M_grey->view_greylap();
		$h = $this->load->view('finishing/dashboard',$data);
		$c['content'] = $this->load->view('finishing/grey/lap/laporan', $h);
	}
}

/* End of file  */
/* Location: ./application/Greylap/ */