<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mtsniaga extends CI_Controller {

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
	// ======================================================= INPUT PENGELUARAN CAMBRIC KE NIAGA============================================================
	// ========================================== CAMBRIC KE NIAGA =========================================
	
	// Fungsi View Mutasi Niaga
	public function view_mtsniaga()
	{		
		$data['isi'] = $this->M_cambric->view_mtsniaga();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/cambric/mutasiniaga/view_mtsniaga', $h);
	}
	// Fungsi View Detail Mutasi Niaga
	public function view_dtlmtsniaga($id='')
	{		
		$data['isi'] = $this->M_cambric->view_dtlmtsniaga($id);
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/cambric/mutasiniaga/view_dtlmtsniaga', $h);
	}
	// Fungsi Edit Mutasi Niaga
	public function view_mtshdr($id)
	{
		$id 			= $this->input->post('kode');
		$no_ordercmb 	= $this->input->post('no_ordercmb');
		$tgl_order 		= $this->input->post('tgl_order');

		$data 	= array('no_ordercmb' => $no_ordercmb,
						'tgl_order'   => $tgl_order
						);
		$sql 	= $this->M_cambric->view_mtshdr($id,$data);

		$data2	= array('no_ordercmb' => $no_ordercmb,
						'tgl_dtl_order'   => $tgl_order
						);
		$sql2 	= $this->M_cambric->view_mtsdtl($id,$data2);
		$allsql = array($sql,$sql2);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil diubah');window.location = '".site_url('cambric/mutasiniaga/view_mtsniaga')."';</script>";
			}    else{ // Jika gagal
			echo "<script>alert('Data gagal diubah');window.location = '".site_url('cambric/mutasiniaga/view_mtsniaga')."';</script>";
		}
	}
	// Fungsi Edit Mutasi Niaga
	public function view_emtsniaga($id)
	{
		$id 				= $this->input->post('kode_detail');
		$kode_gudang_trans	= $this->input->post('kode_gudang_trans');
		$tgl_kegudang		= $this->input->post('tgl_kegudang');
		$gulung_gdg			= $this->input->post('gulung_gdg');
		$kegudang 			= $this->input->post('kegudang');
		$mtsgudang 			= $this->input->post('mtsgudang');
		$kode_stdpot		= $this->input->post('kode_stdpot');
		$return				= $this->input->post('return');

		$data   = array(
						'kode_gudang_trans' 	=> $kode_gudang_trans,
						'tgl_kegudang' 			=> $tgl_kegudang,
						'no_gulpack' 			=> $no_gulpack,
						'kegudang' 				=> $kegudang,
						'mtsgudang' 			=> $mtsgudang,
						'kode_stdpot' 			=> $kode_stdpot,
						'return' 				=> $return	
						);    
		$sql  	= $this->M_cambric->edit_mtsniaga($id,$data);
		redirect('cambric/mutasiniaga/view_mtsniaga', 'refresh');
	}
// Fungsi Tambah Mutasi Niaga
	public function tambah_mtsniaga()
	{

		$isi['kode'] = $this->M_cambric->kode_ordercmb();
		$isi['get_packpp'] = $this->M_cambric->get_packpp();
		$h = $this->load->view('finishing/dashboard', $isi);
		$c['content'] = $this->load->view('finishing/cambric/mutasiniaga/tambah_mtsniaga', $h);
		$this->load->view('finishing/dashboard', $c);
	}
	// Fungsi Simpan Mutasi Niaga
	public function simpan_mtsniaga()
		{
		// $cek = $this->db->query("SELECT * FROM mtcmb_detail where kode_detail='".$this->input->post('kode_detail',TRUE)."'")->num_rows();
		// if($cek <= 0){
				$kode_ordercmb 				= $this->input->post('kode_ordercmb', TRUE);
				$no_ordercmb 				= $this->input->post('no_ordercmb', TRUE);
				$tgl_order				 	= $this->input->post('tgl_order', TRUE);
				$kode_group					= $this->input->post('kode_group');

				$no_orderppcmb 				= $this->input->post('no_orderppcmb', TRUE);
				$kode_wo 					= $this->input->post('kode_wo', TRUE);
				$kode_brg 					= $this->input->post('kode_brg', TRUE);
				$kode_gudang_trans			= $this->input->post('kode_gudang_trans', TRUE);
				$gulung_gdg 				= $this->input->post('gulung_gdg', TRUE);
				$kegudang 					= $this->input->post('kegudang', TRUE);
				$mtsgudang 					= $this->input->post('mtsgudang', TRUE);
				$kode_stdpot 				= $this->input->post('kode_stdpot', TRUE);
				$return 					= $this->input->post('return', TRUE);
				$selesai 					= $this->input->post('selesai', TRUE);

			$data1 = array(
							'kode_ordercmb' 	=> $kode_ordercmb,
							'no_ordercmb'		=> $no_ordercmb,
							'tgl_order' 		=> $tgl_order,
							'kode_group' 		=> $kode_group
			);
			$sql1 = $this->M_cambric->simpan_cmbhdr($data1);
			
			$data2 = array();
			$i = 0;
			if(is_array($no_orderppcmb)){
				foreach ($no_orderppcmb as $cmb_detail) {
					array_push($data2, array(
					'kode_ordercmb'   		 	=> $kode_ordercmb,
					'no_ordercmb'				=> $no_ordercmb,
					'no_orderppcmb'				=> $cmb_detail,
					'tgl_dtl_order' 			=> $tgl_order, 				
					'kode_gudang_trans'			=> $kode_gudang_trans[$i],
					'tgl_kegudang'	 			=> $tgl_order, 					
					'kode_wo'					=> $kode_wo[$i], 					
					'kode_brg'					=> $kode_brg[$i], 				
					'gulung_gdg'				=> $gulung_gdg[$i], 			
					'kegudang'					=> $kegudang[$i], 		
					'mtsgudang' 				=> $mtsgudang[$i], 				
					'kode_stdpot'				=> $kode_stdpot[$i], 			
					'return'					=> $return[$i], 		
					'selesai'					=> 'T'	
					));
					$i++;
				}
			}		

			$sql2 = $this->M_cambric->simpan_cmbdtl($data2);

			$allsql = array($sql1,$sql2);
			if($allsql){ // Jika sukses
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('cambric/mtsniaga/tambah_mtsniaga')."';</script>";
			}else{ // Jika gagal
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('cambric/mtsniaga/tambah_mtsniaga')."';</script>";
			}

			redirect('cambric/mtsniaga/tambah_mtsniaga','refresh');
		// }else{
		// 	echo '<script language="javascript">';
		// 	echo 'alert("Maaf Kode Barang Sudah Ada")';
		// 	echo '</script>';
		// 	echo '<script language="javascript">';
		// 	echo 'window.location=("'.site_url('cambric/campacking/tambah_packing/').'")';
		// 	echo '</script>';
		// }
	}
	
	// Fungsi Simpan / Edit  Mutasi Niaga
	//public function simpan_mtsniaga()
	// {
	// 	$id = $this->input->post('kode_detail');
	// 	$data   = array(
	// 					'kode_gudang_trans' 	=>  $this->input->post('kode_gudang_trans'),
	// 					'tgl_kegudang' 			=>  $this->input->post('tgl_kegudang'),
	// 					'gulung_gdg' 			=>  $this->input->post('gulung_gdg'),
	// 					'kegudang' 				=>  $this->input->post('kegudang'),
	// 					'mtsgudang' 			=>  $this->input->post('mtsgudang'),
	// 					'kode_stdpot' 			=>  $this->input->post('kode_stdpot'),
	// 					'return' 				=>  $this->input->post('return')
	// 					);      
	// 	$sql  	= $this->M_cambric->simpan_packing($id,$data);
	// 	redirect('cambric/mutasiniaga/view_mtsniaga', 'refresh');
	// }
}

/* End of file Mtsniaga */
/* Location: ./application/controllers/Mtsniaga */