<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campacking extends CI_Controller {

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
	// ========================================== CAMBRIC PACKING =========================================
	
	// // Fungsi View Packing
	// public function view_packing()
	// {		
	// 	$data['isi'] = $this->M_cambric->view_packing();
	// 	$h = $this->load->view('finishing/dashboard', $data);
	// 	$c['content'] = $this->load->view('finishing/cambric/packing/view_packing', $h);
	// }
	// Fungsi View Packing
	public function view_packingtgl()
	{	

		$tgl_packing =  $this->input->post('tgl_packing');
		$data['isi'] = $this->M_cambric->view_packingtgl($tgl_packing);
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/cambric/packing/view_packing', $h);
	}
	// Fungsi Edit Packing
	public function view_pack($id)
	{
		$id 				= $this->input->post('kode_detail');
		$no_gulpack			= $this->input->post('no_gulpack');
		$tgl_packing		= $this->input->post('tgl_packing');
		$gulung_packing 	= $this->input->post('gulung_packing');
		$packing 			= $this->input->post('packing');
		$kode_packing_trans	= $this->input->post('kode_packing_trans');

		$data   = array('no_gulpack' 			=> $no_gulpack,
						'tgl_packing' 			=> $tgl_packing, 	
						'gulung_packing' 		=> $gulung_packing,
						'packing' 				=> $packing,
						'kode_packing_trans' 	=> $kode_packing_trans
						);    
		$sql  	= $this->M_cambric->edit_packing($id,$data);
		redirect('cambric/campacking/view_packing', 'refresh');
	}
	// Fungsi Tambah Detail Packing
	public function tambah_packing()
	{
		$isi['get_foldpp'] = $this->M_cambric->get_foldpp();
		$h = $this->load->view('finishing/dashboard', $isi);
		$c['content'] = $this->load->view('finishing/cambric/packing/tambah_packing', $h);
		$this->load->view('finishing/dashboard', $c);
	}

	// Fungsi Simpan Packing
	public function simpan_packing()
	{
		$cek = $this->db->query("SELECT * FROM mtcmb_packing where kode_dtl_packing='".$this->input->post('kode_dtl_packing',TRUE)."'")->num_rows();
		if($cek <= 0){
				$no_orderppcmb 				= $this->input->post('no_orderppcmb', TRUE);
				$tgl_packing				= $this->input->post('tgl_packing', TRUE);
				$kode_packing_trans			= $this->input->post('kode_packing_trans', TRUE);
				$kode_wo 					= $this->input->post('kode_wo', TRUE);
				$kode_brg 					= $this->input->post('kode_brg', TRUE);
				$no_gulpack 				= $this->input->post('no_gulpack', TRUE);
				$gulung_packing 			= $this->input->post('gulung_packing', TRUE);
				$packing 					= $this->input->post('packing', TRUE);

			$data = array(  
				"no_orderppcmb"				=> $no_orderppcmb,
				"tgl_packing"				=> $tgl_packing, 				
				"kode_packing_trans"		=> $kode_packing_trans,			
				"kode_wo"					=> $kode_wo, 					
				"kode_brg"					=> $kode_brg, 				
				"no_gulpack"				=> $no_gulpack, 			
				"gulung_packing"			=> $gulung_packing, 		
				"packing"					=> $packing			
			);		
			$sql = $this->M_cambric->simpan_packing($data);
			$allsql = array($sql);
			if($allsql){ // Jika sukses
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('cambric/campacking/tambah_packing')."';</script>";
			}else{ // Jika gagal
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('cambric/campacking/tambah_packing')."';</script>";
			}

			redirect('cambric/campacking/tambah_packing','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf Kode Barang Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('cambric/campacking/tambah_packing/').'")';
			echo '</script>';
		}
	}
	// Fungsi Simpan / Edit Packing
	// public function simpan_packing()
	// {
	// 	$id = $this->input->post('kode_detail');
	// 	$data   = array(
	// 					'no_gulpack' 			=>  $this->input->post('no_gulpack'),
	// 					'tgl_packing' 			=>  $this->input->post('tgl_packing'),
	// 					'gulung_packing' 		=>  $this->input->post('gulung_packing'),
	// 					'packing' 				=>  $this->input->post('packing'),
	// 					'kode_packing_trans' 	=>  $this->input->post('kode_packing_trans')
	// 					);      
	// 	$sql  	= $this->M_cambric->simpan_packing($id,$data);
	// 	redirect('cambric/campacking/view_packing', 'refresh');
	// }
	// Fungsi Hapus / Edit Packing
	public function hapus_packing($id)
	{
		$sql = $this->M_cambric->hapus_packing($id);
		$allsql	= array($sql);
		if ($allsql) {
			echo "<script>alert('Data berhasil dihapus');window.location = '".site_url('cambric/campacking/view_packing')."';</script>";
		}else{
			echo "<script>alert('Data gagal dihapus');window.location = '".site_url('cambric/campacking/view_packing')."';</script>";
		}
	}
}

/* End of file Campacking */
/* Location: ./application/controllers/Campacking */