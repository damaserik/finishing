<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Greydkrj extends CI_Controller {

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
	// ============================================================== INPUT GREY DIKERJAKAN =================================================================
	// ========================================== GREY DIKERJAKAN =========================================

	// Fungsi View Grey Dikerjakan / diretur
	public function view_greydkrj()
	{		
		$data['isi'] = $this->M_grey->view_greydkrj();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/grey/dkrj/view_greydkrj', $h);
	}

	// Fungsi Edit Grey Dikerjakan / diretur
	public function view_grydkrj($id)
	{
		$id 				= $this->input->post('kode_detail');
		$kode_proses_trans 	= $this->input->post('kode_proses_trans');
		$tgl_proses			= $this->input->post('tgl_proses');
		$gulung_proses 		= $this->input->post('gulung_proses');
		$yard_proses 		= $this->input->post('yard_proses');
		$kode_return_trans 	= $this->input->post('kode_return_trans');
		$gulung_return 		= $this->input->post('gulung_return');
		$return 			= $this->input->post('return');

		$data   = array('kode_proses_trans' 	=> $kode_proses_trans,
						'tgl_proses' 			=> $tgl_proses, 	
						'gulung_proses' 		=> $gulung_proses,
						'yard_proses' 			=> $yard_proses,
						'kode_return_trans' 	=> $kode_return_trans,
						'gulung_return' 		=> $gulung_return,
						'return' 				=> $return
						);    
		$sql  	= $this->M_grey->edit_greydkrj($id,$data);
		redirect('grey/greydkrj/view_greydkrj', 'refresh');

		// // $allsql = array($sql);
		// if($sql){ // Jika sukses
		// 	echo "<script>alert('Data berhasil diubah');window.location = '".site_url('grey/greydkrj/view_greydkrj')."';</script>";
		// }else{ // Jika gagal
		// 	echo "<script>alert('Data gagal diubah');window.location = '".site_url('grey/greydkrj/view_greydkrj')."';</script>";
		// }
	}
	public function edit_greydkrj($id='')
	{	
		$data['kode'] = $this->M_grey->kode_ordergrey();
		$data['get_wo'] = $this->M_grey->get_kdwo();
		$data['get_barang'] = $this->M_grey->get_kdbrg();
		$data['ubah_data'] = $this->M_grey->view_edit_greydkrj($id);	
		$c['content'] = $this->load->view('finishing/grey/dkrj/edit_greydkrj', $data);
		$this->load->view('finishing/dashboard', $c);
	}
	public function greydkrj_edit($id)
	{
		$data = array(	'no_orderpp' 	=> $this->input->post('no_orderpp'),
						'tgl_proses' 	=> $this->input->post('tgl_proses'),
						'kain_luar' 	=> $this->input->post('kain_luar'),
						'kode_wo' 		=> $this->input->post('kode_wo'),
						'kode_brg' 		=> $this->input->post('kode_brg'),
						'gulung' 		=> $this->input->post('gulung'),
						'meter' 		=> $this->input->post('meter'),
						'yard' 			=> $this->input->post('yard')
			);    
		$this->M_grey->edit_greydkrj($id,$data);
		redirect('grey/greydkrj/view_greydkrj/', 'refresh');
	}

}

/* End of file Greydkrj.php */
/* Location: ./application/controllers/Greydkrj.php */