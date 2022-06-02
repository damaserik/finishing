<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Saldo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
		$this->load->helper(array('url','form','file'));
	}

	public function index()
	{
		$c['content'] = $this->load->view('finishing/content');
		$this->load->view('finishing/dashboard',$c);
	}

//***********************************************************************************************************************************************************
	// =============================================================== SALDO AWAL ====================================================================
	// ========================================== SALDO AWAL GREY =========================================
	// Fungsi View Saldo Awal Grey
	public function view_awal_grey()
	{		
		$data['get_jenis'] = $this->M_master->get_kdjenis();
		$data['get_group'] = $this->M_master->get_kdgroup();
		$data['isi'] = $this->M_master->view_awal_grey();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/saldo/view_awal_grey', $h);
	}

	public function ubah_awal_grey($id='')
	{	
		$data['get_jenis'] = $this->M_master->get_kdjenis();
		$data['get_group'] = $this->M_master->get_kdgroup();
		$data['ubah_data'] = $this->M_master->view_ubah_awal_grey($id);		
		$c['content'] = $this->load->view('finishing/master/saldo/ubah_awal_grey', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function awal_grey_ubah($id)
	{
		$data = array(	'kode_brg' => $this->input->post('kode_brg'),
			'nama_brg' => $this->input->post('nama_brg'),
			'kode_group' => $this->input->post('kode_group'),
			'kode_jenis' => $this->input->post('kode_jenis'),
			'awalgryth' => $this->input->post('awalgryth'),
			'awalgrybl' => $this->input->post('awalgrybl'),
			'g01' => $this->input->post('g01'),
			'g02' => $this->input->post('g02'),
			'g03' => $this->input->post('g03'),
			'g04' => $this->input->post('g04'),
			'g05' => $this->input->post('g05'),
			'g06' => $this->input->post('g06'),
			'g07' => $this->input->post('g07'),
			'g08' => $this->input->post('g08'),
			'g09' => $this->input->post('g09'),
			'g10' => $this->input->post('g10'),
			'g11' => $this->input->post('g11'),
			'g12' => $this->input->post('g12')
			);
		$this->M_master->ubah_awal_grey($id,$data);
		redirect('master/saldo/view_awal_grey', 'refresh');
	}

	// ========================================== SALDO AWAL CAMBRIC PACKING =========================================
	// Fungsi View Saldo Awal Cambric Packing
	public function view_cambric_packing()
	{		
		$data['get_jenis'] = $this->M_master->get_kdjenis();
		$data['get_group'] = $this->M_master->get_kdgroup();
		$data['isi'] = $this->M_master->view_cambric_packing();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/saldo/view_cambric_packing', $h);
	}

	public function ubah_cambric_packing($id='')
	{	
		$data['get_jenis'] = $this->M_master->get_kdjenis();
		$data['get_group'] = $this->M_master->get_kdgroup();
		$data['ubah_data'] = $this->M_master->view_ubah_cambric_packing($id);		
		$c['content'] = $this->load->view('finishing/master/saldo/ubah_cambric_packing', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function cambric_packing_ubah($id)
	{
		$data = array(	'kode_brg' => $this->input->post('kode_brg'),
			'nama_brg' => $this->input->post('nama_brg'),
			'kode_group' => $this->input->post('kode_group'),
			'kode_jenis' => $this->input->post('kode_jenis'),
			'awalcmbth' => $this->input->post('awalcmbth'),
			'awalcmbbl' => $this->input->post('awalcmbbl'),
			'c01' => $this->input->post('c01'),
			'c02' => $this->input->post('c02'),
			'c03' => $this->input->post('c03'),
			'c04' => $this->input->post('c04'),
			'c05' => $this->input->post('c05'),
			'c06' => $this->input->post('c06'),
			'c07' => $this->input->post('c07'),
			'c08' => $this->input->post('c08'),
			'c09' => $this->input->post('c09'),
			'c10' => $this->input->post('c10'),
			'c11' => $this->input->post('c11'),
			'c12' => $this->input->post('c12')
			);
		$this->M_master->ubah_awal_grey($id,$data);
		redirect('master/saldo/view_cambric_packing', 'refresh');
	}

	// ========================================== SALDO AWAL CAMBRIC FOLDING =========================================
	// Fungsi View Saldo Awal Cambric Folding
	public function view_cambric_folding()
	{		
		$data['get_jenis'] = $this->M_master->get_kdjenis();
		$data['get_group'] = $this->M_master->get_kdgroup();
		$data['isi'] = $this->M_master->view_cambric_folding();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/saldo/view_cambric_folding', $h);
	}

	public function ubah_cambric_folding($id='')
	{	
		$data['get_jenis'] = $this->M_master->get_kdjenis();
		$data['get_group'] = $this->M_master->get_kdgroup();
		$data['ubah_data'] = $this->M_master->view_ubah_cambric_folding($id);		
		$c['content'] = $this->load->view('finishing/master/saldo/ubah_cambric_folding', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function cambric_folding_ubah($id)
	{
		$data = array(	'kode_brg' => $this->input->post('kode_brg'),
			'nama_brg' => $this->input->post('nama_brg'),
			'kode_group' => $this->input->post('kode_group'),
			'kode_jenis' => $this->input->post('kode_jenis'),
			'awalfldth' => $this->input->post('awalfldth'),
			'awalfldbl' => $this->input->post('awalfldbl'),
			'f01' => $this->input->post('f01'),
			'f02' => $this->input->post('f02'),
			'f03' => $this->input->post('f03'),
			'f04' => $this->input->post('f04'),
			'f05' => $this->input->post('f05'),
			'f06' => $this->input->post('f06'),
			'f07' => $this->input->post('f07'),
			'f08' => $this->input->post('f08'),
			'f09' => $this->input->post('f09'),
			'f10' => $this->input->post('f10'),
			'f11' => $this->input->post('f11'),
			'f12' => $this->input->post('f12')
			);
		$this->M_master->ubah_awal_grey($id,$data);
		redirect('master/saldo/view_cambric_folding', 'refresh');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */