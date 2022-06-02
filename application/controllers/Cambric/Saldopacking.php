<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldopacking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cambric');
		$this->load->helper(array('url','form','file'));
	}

	public function index()
	{
		$c['content'] = $this->load->view('finishing/content');
		$this->load->view('finishing/dashboard',$c);
	}
	//*****************************************************************************************************************************************************
	// =============================================================== INPUT CAMBRIC ======================================================================
	// ========================================== CAMBRIC SALDO PACKING =========================================
	
	// Fungsi View Saldo Packing
	public function view_saldopacking()
	{		
		$data['isi'] = $this->M_cambric->view_saldopacking();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/cambric/saldopacking/view_saldopacking', $h);
	}

	// Fungsi Tambah Detail Saldo Packing
	public function tambah_saldopacking()
	{
		$isi['get_packpp'] = $this->M_cambric->get_packpp();
		$h = $this->load->view('finishing/dashboard', $isi);
		$c['content'] = $this->load->view('finishing/cambric/saldopacking/tambah_saldopacking', $h);
		$this->load->view('finishing/dashboard', $c);
	}
	// Fungsi Simpan / Edit Saldo Packing
	public function simpan_saldopacking()
	{
		$id = $this->input->post('kode_dtl_packing');
		$data   = array(
						'saldo_awal' 		=>  $this->input->post('saldo_awal'),
						'tgl_saldo' 		=>  $this->input->post('tgl_saldo'),
						'kode_saldo_trans' 	=>  $this->input->post('kode_saldo_trans')
						);      
		$sql  	= $this->M_cambric->simpan_saldopacking($id,$data);
		redirect('cambric/saldopacking/view_saldopacking', 'refresh');
	}
}

/* End of file saldopacking.php */
/* Location: ./application/controllers/saldopacking.php */