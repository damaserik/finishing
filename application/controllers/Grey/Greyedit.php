<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Greyedit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_grey');
		$this->load->helper(array('url','form','file'));
	}

	public function index()
	{
		$c['content'] = $this->load->view('finishing/content');
		$this->load->view('finishing/dashboard',$c);
	}

//***********************************************************************************************************************************************************
	// =============================================================== GREY EDIT STATUS =====================================================================
	// ========================================== GREY EDIT BELUM SELESAI =========================================

	// Fungsi View Grey Edit Blm Selesai
	public function view_greystat1()
	{		
		$data['isi'] = $this->M_grey->view_greystat1();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/grey/edit/view_greyblm', $h);
	}
	
	// Fungsi Edit Grey Status
	public function edit_greystat1($id)
	{
		$id 				= $this->input->post('kode_detail');
		$selesai 			= $this->input->post('selesai');

		$data   = array('selesai' 				=> $selesai
						);    
		$sql  	= $this->M_grey->edit_greystat1($id,$data);
		redirect('grey/greyedit/view_greystat1', 'refresh');
	}

	// ============================================================= GREY EDIT SELESAI ====================================================================
	// ========================================== GREY EDIT SELESAI =========================================
	// Fungsi View Grey Edit Selesai
	public function view_greystat2()
	{		
		$data['isi'] = $this->M_grey->view_greystat2();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/grey/edit/view_greysls', $h);
	}
	// Fungsi Edit Grey Status
	public function edit_greystat2($id)
	{
		$id 				= $this->input->post('kode_detail');
		$selesai 			= $this->input->post('selesai');

		$data   = array('selesai' 				=> $selesai
						);    
		$sql  	= $this->M_grey->edit_greystat2($id,$data);
		redirect('grey/greyedit/view_greystat2', 'refresh');
	}
}

/* End of file Greyedit */
/* Location: ./application/controllers/ */