<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Greywo extends CI_Controller {

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
	// =============================================================== INPUT GREY ====================================================================
	// ========================================== GREY WO =========================================
	// Fungsi View Grey WO
	public function view_greywo()
	{		
		// $data['get_jenis'] = $this->M_master->get_kdjenis();
		// $data['get_group'] = $this->M_master->get_kdgroup();
		$data['isi'] = $this->M_grey->view_greywo();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/grey/wo/view_greywo', $h);
	}
	public function view_dtlgreywo($id='')
	{		
		// $data['get_jenis'] = $this->M_master->get_kdjenis();
		// $data['get_group'] = $this->M_master->get_kdgroup();
		// $data['get_proses'] = $this->M_master->get_kdproses();
		$data['isi'] = $this->M_grey->view_dtlgreywo($id);
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/grey/wo/view_dtlgreywo', $h);
	}

	// Fungsi Tambah Grey WO
	public function tambah_greywo()
	{
		$isi['kode'] = $this->M_grey->kode_ordergrey();
		$isi['get_wo'] = $this->M_grey->get_kdwo();
		$isi['get_barang'] = $this->M_grey->get_kdbrg();
		$h = $this->load->view('finishing/dashboard', $isi);
		$c['content'] = $this->load->view('finishing/grey/wo/tambah_greywo', $h);
		$this->load->view('finishing/dashboard', $c);
	}

	// Fungsi Simpan Grey WO
	public function simpan_greywo()
	{
		$cek = $this->db->query("SELECT * FROM mtgrey_detail where no_orderpp='".$this->input->post('no_orderpp', TRUE)."' AND no_ordergry='".$this->input->post('no_ordergry',TRUE)."'")->num_rows();
		if($cek <= 0){

			$kode_ordergry		= $this->input->post('kode_ordergry');
			$no_ordergry 		= $this->input->post('no_ordergry');
			$tgl_order 			= $this->input->post('tgl_order');
			$kode_group			= $this->input->post('kode_group');
			//dtl grey wo
			$no_orderpp			= $this->input->post('no_orderpp');
			$kain_luar 			= $this->input->post('kain_luar');
			$kode_wo 			= $this->input->post('kode_wo');
			$kode_brg 			= $this->input->post('kode_brg');
			$gulung 			= $this->input->post('gulung');
			$meter 				= $this->input->post('meter');
			$yard 				= $this->input->post('yard');
			$kode_terima_trans	= $this->input->post('kode_terima_trans');
			$terima				= $this->input->post('terima');

			$data1 = array(
							'kode_ordergry' 	=> $kode_ordergry,
							'no_ordergry'		=> $no_ordergry,
							'tgl_order' 		=> $tgl_order,
							'kode_group' 		=> $kode_group
			);
			$sql1 = $this->M_grey->simpan_greywohdr($data1);

			$data2 = array();
			$i = 0;
			if(is_array($no_orderpp)){
				foreach ($no_orderpp as $grey_detail) {
					array_push($data2, array(
							'kode_ordergry' 	=> $kode_ordergry,
							'no_ordergry' 		=> $no_ordergry,
							'tgl_dtl_order' 	=> $tgl_order,
							'no_orderpp' 		=> $grey_detail,
							'kain_luar' 		=> $kain_luar[$i],
							'kode_wo' 			=> $kode_wo[$i],
							'kode_brg'			=> $kode_brg[$i],
							'gulung'			=> $gulung[$i],
							'meter' 			=> $meter[$i],
							'yard' 				=> $yard[$i],
							'kode_terima_trans'	=> $kode_terima_trans[$i],
							'terima' 			=> $terima[$i],
							'selesai'	 		=> 'T'
					));
					$i++;
				}
			}
			$sql2 = $this->M_grey->simpan_greywodtl($data2);
				$allsql = array($sql1,$sql2);
				if($allsql){ // Jika sukses
				/*$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('master/barang','refresh');*/
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('grey/greywo/view_greywo')."';</script>";
			}else{ // Jika gagal
				/*$this->session->set_flashdata('error', 'Data gagal disimpan');
				redirect('master/barang','refresh');*/
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('grey/greywo/view_greywo')."';</script>";
			}

			redirect('grey/greywo/view_greywo','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf No Order Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('grey/wo/tambah_greywo/').'")';
			echo '</script>';
		}
	}

	// Fungsi Delete Grey WO
	public function hapus_greywo($id)
	{
		$sql = $this->M_grey->delete_greywo($id);
		$sql2 = $this->M_grey->delete_greywodtl2($id);
		$allsql = array($sql,$sql2);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil di hapus');window.location = '".site_url('grey/greywo/view_greywo')."';</script>";
		}else{ // Jika gagal
			echo "<script>alert('Data gagal di hapus');window.location = '".site_url('grey/greywo/view_greywo')."';</script>";
		}
		// $data1 = array( 'status' => '1'
		// 	);
		// $this->M_grey->delete_greywo($id,$data1);
		// $data2 = array( 'status' => '1'
		// 	);
		// $this->M_grey->delete_greywodtl($id,$data2);
		// redirect('finishing/grey/wo/view_greywo', 'refresh');
	}
	public function hapus_greywodtl($id)
	{
		$sql = $this->M_grey->delete_greywodtl($id);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil di hapus');window.location = '".site_url('grey/greywo/view_dtlgreywo')."';</script>";
		}else{ // Jika gagal
			echo "<script>alert('Data gagal di hapus');window.location = '".site_url('grey/greywo/view_dtlgreywo')."';</script>";
		}
		// $data2 = array( 'status' => '1'
		// 	);
		// $this->M_grey->delete_greywodtl2($id,$data2);
		// redirect('finishing/grey/wo/view_greywo', 'refresh');
	}

	// Fungsi Edit Grey WO
	public function view_gryhdr($id)
	{
		$id 			= $this->input->post('kode');
		$no_ordergry 	= $this->input->post('no_ordergry');
		$tgl_order 		= $this->input->post('tgl_order');

		$data 	= array('no_ordergry' => $no_ordergry,
						'tgl_order'   => $tgl_order
						);
		$sql 	= $this->M_grey->view_gryhdr($id,$data);

		$data2	= array('no_ordergry' => $no_ordergry,
						'tgl_dtl_order'   => $tgl_order
						);
		$sql2 	= $this->M_grey->view_grydtl($id,$data2);
		$allsql = array($sql,$sql2);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil diubah');window.location = '".site_url('grey/greywo/view_greywo')."';</script>";
			}    else{ // Jika gagal
			echo "<script>alert('Data gagal diubah');window.location = '".site_url('grey/greywo/view_greywo')."';</script>";
		}
	}
	public function edit_greywo($id='')
	{	
		$data['kode'] = $this->M_grey->kode_ordergrey();
		$data['get_wo'] = $this->M_grey->get_kdwo();
		$data['get_barang'] = $this->M_grey->get_kdbrg();
		$data['ubah_data'] = $this->M_grey->view_edit_greywo($id);	
		$c['content'] = $this->load->view('finishing/grey/wo/edit_dtlgreywo', $data);
		$this->load->view('finishing/dashboard', $c);
	}
	public function greywo_edit($id)
	{
		$ids = $this->input->post('kode_ordergry');
		$data = array(	'no_orderpp' 	=> $this->input->post('no_orderpp'),
						'tgl_dtl_order' => $this->input->post('tgl_dtl_order'),
						'kain_luar' 	=> $this->input->post('kain_luar'),
						'kode_wo' 		=> $this->input->post('kode_wo'),
						'kode_brg' 		=> $this->input->post('kode_brg'),
						'gulung' 		=> $this->input->post('gulung'),
						'meter' 		=> $this->input->post('meter'),
						'yard' 			=> $this->input->post('yard'),
						'terima'		=> $this->input->post('terima')
			);
		$this->M_grey->edit_greywo($id,$data);
		redirect('grey/greywo/view_dtlgreywo/'.$ids, 'refresh');
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */