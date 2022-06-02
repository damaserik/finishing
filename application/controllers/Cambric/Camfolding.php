<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Camfolding extends CI_Controller {

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
//***********************************************************************************************************************************************************
	// =============================================================== INPUT CAMBRIC ====================================================================
	// ========================================== CAMBRIC FOLDING =========================================
	
	// //Fungsi View Folding
	// public function view_folding()
	// {		
	// 	$data['isi'] = $this->M_cambric->view_folding($tgl_folding);
	// 	$h = $this->load->view('finishing/dashboard', $data);
	// 	$c['content'] = $this->load->view('finishing/cambric/folding/view_folding', $h);
	// }

	public function view_foldingtgl()
	{	
		$tgl_folding =  $this->input->post('tgl_folding');
		$data['isi'] = $this->M_cambric->view_foldingtgl($tgl_folding);
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/cambric/folding/view_folding', $h);
	}
	public function view_tgl()
	{	
		$tgl_fold =  $this->input->post('tgl_fold');
		$data['isi'] = $this->M_cambric->view_tgl($tgl_fold);
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/cambric/folding/view_folding', $h);
	}
	// Fungsi Edit Folding
	public function view_fold($id)
	{
		$id 				= $this->input->post('kode_detail');
		$no_gulfold 		= $this->input->post('no_gulfold');
		$gulung_folding 	= $this->input->post('gulung_folding');
		$cutting 			= $this->input->post('cutting');
		$sisa 				= $this->input->post('sisa');
		$folding 			= $this->input->post('folding');

		$data   = array('no_gulfold' 		=> $no_gulfold,
						'gulung_folding' 	=> $gulung_folding,
						'cutting' 			=> $cutting,
						'sisa' 				=> $sisa,
						'folding' 			=> $folding
						);    
		$sql  	= $this->M_cambric->edit_folding($id,$data);
		redirect('cambric/camfolding/view_folding', 'refresh');
	}
	// Fungsi Tambah Detail Folding
	public function tambah_folding()
	{
		// $isi['kode'] = $this->M_cambric->kode_ordergrey();

		$isi['get_greypp'] = $this->M_cambric->get_greypp();
		$h = $this->load->view('finishing/dashboard',$isi);
		$c['content'] = $this->load->view('finishing/cambric/folding/tambah_folding', $h);
		$this->load->view('finishing/dashboard', $c);
	}

	// Fungsi Insert Detail Folding
	public function simpan_folding()
	{
		$cek = $this->db->query("SELECT * FROM mtcmb_folding where kode_dtl_folding='".$this->input->post('kode_dtl_folding',TRUE)."'")->num_rows();
		if($cek <= 0){
				$no_orderppcmb 				= $this->input->post('no_orderppcmb', TRUE);
				$tgl_folding				= $this->input->post('tgl_folding', TRUE);
				$kode_folding_trans			= $this->input->post('kode_folding_trans', TRUE);
				$kode_wo 					= $this->input->post('kode_wo', TRUE);
				$kode_brg 					= $this->input->post('kode_brg', TRUE);
				$no_gulfold 				= $this->input->post('no_gulfold', TRUE);
				$gulung_folding 			= $this->input->post('gulung_folding', TRUE);
				$cutting 					= $this->input->post('cutting', TRUE);
				$sisa 						= $this->input->post('sisa', TRUE);
				$folding 					= $this->input->post('folding', TRUE);

			$data = array(  
				"no_orderppcmb"				=> $no_orderppcmb,
				"tgl_folding"				=> $tgl_folding, 				
				"kode_folding_trans"		=> $kode_folding_trans,			
				"kode_wo"					=> $kode_wo, 					
				"kode_brg"					=> $kode_brg, 				
				"no_gulfold"				=> $no_gulfold, 			
				"gulung_folding"			=> $gulung_folding, 		
				"cutting"					=> $cutting, 				
				"sisa"						=> $sisa, 						
				"folding"					=> $folding 			
			);		
			$sql = $this->M_cambric->simpan_folding($data);
			$allsql = array($sql);
			if($allsql){ // Jika sukses
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('cambric/camfolding/tambah_folding')."';</script>";
			}else{ // Jika gagal
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('cambric/camfolding/tambah_folding')."';</script>";
			}

			redirect('cambric/camfolding/tambah_folding','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf Kode Barang Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('cambric/camfolding/tambah_folding/').'")';
			echo '</script>';
		}
	}
	// Fungsi Hapus Folding
	public function hapus_folding($id)
	{
		$sql = $this->M_cambric->hapus_folding($id);
		$allsql	= array($sql);
		if ($allsql) {
			echo "<script>alert('Data berhasil dihapus');window.location = '".site_url('cambric/camfolding/view_folding')."';</script>";
		}else{
			echo "<script>alert('Data gagal dihapus');window.location = '".site_url('cambric/camfolding/view_folding')."';</script>";
		}
	}
}
/* End of file Camfolding.php */
/* Location: ./application/controllers/Camfolding.php */