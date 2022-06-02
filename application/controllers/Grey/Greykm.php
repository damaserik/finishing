<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Greykm extends CI_Controller {
	
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
	// ========================================== GREY KM =========================================
	// Fungsi View Grey KM
	public function view_greykm()
	{		
		$data['isi'] = $this->M_grey->view_greykm();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/grey/km/view_greykm', $h);
	}
	public function view_dtlgreykm($id='')
	{		
		$data['isi'] = $this->M_grey->view_dtlgreykm($id);
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/grey/km/view_dtlgreykm', $h);
	}
	
	// Fungsi Tambah Grey KM
	public function tambah_greykm()
	{
		$isi['kode'] = $this->M_grey->kode_ordergrey();
		$isi['get_barang'] = $this->M_grey->get_kdbrg();
		$h = $this->load->view('finishing/dashboard', $isi);
		$c['content'] = $this->load->view('finishing/grey/km/tambah_greykm', $h);
		$this->load->view('finishing/dashboard', $c);
	}
	// Fungsi Simpan Grey KM
	public function simpan_greykm()
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
			$sql1 = $this->M_grey->simpan_greykmhdr($data1);

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
			$sql2 = $this->M_grey->simpan_greykmdtl($data2);
				$allsql = array($sql1,$sql2);
				if($allsql){ // Jika sukses
				/*$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('master/barang','refresh');*/
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('grey/greykm/view_greykm')."';</script>";
			}else{ // Jika gagal
				/*$this->session->set_flashdata('error', 'Data gagal disimpan');
				redirect('master/barang','refresh');*/
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('grey/greykm/view_greykm')."';</script>";
			}

			redirect('grey/greykm/view_greykm','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf No Order Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('grey/km/tambah_greykm/').'")';
			echo '</script>';
		}
	}

	// Fungsi Delete Grey KM
	public function hapus_greykm($id)
	{
		$sql = $this->M_grey->delete_greykm($id);
		$sql2 = $this->M_grey->delete_greykmdtl2($id);
		$allsql = array($sql,$sql2);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil di hapus');window.location = '".site_url('grey/greykm/view_greykm')."';</script>";
		}else{ // Jika gagal
			echo "<script>alert('Data gagal di hapus');window.location = '".site_url('grey/greykm/view_greykm')."';</script>";
		}
	}
	public function hapus_greykmdtl($id)
	{
		$sql = $this->M_grey->delete_greykmdtl($id);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil di hapus');window.location = '".site_url('grey/greykm/view_dtlgreykm')."';</script>";
		}else{ // Jika gagal
			echo "<script>alert('Data gagal di hapus');window.location = '".site_url('grey/greykm/view_dtlgreykm')."';</script>";
		}
	}

	public function view_grykmhdr($id)
	{
		$id 			= $this->input->post('kode');
		$no_ordergry 	= $this->input->post('no_ordergry');
		$tgl_order 		= $this->input->post('tgl_order');

		$data 	= array('no_ordergry' => $no_ordergry,
						'tgl_order'   => $tgl_order
						);
		$sql 	= $this->M_grey->view_grykmhdr($id,$data);

		$data2	= array('no_ordergry' => $no_ordergry,
						'tgl_dtl_order'   => $tgl_order
						);
		$sql2 	= $this->M_grey->view_grykmdtl($id,$data2);
		$allsql = array($sql,$sql2);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil diubah');window.location = '".site_url('grey/greykm/view_greykm')."';</script>";
		}else{ // Jika gagal
			echo "<script>alert('Data gagal diubah');window.location = '".site_url('grey/greykm/view_greykm')."';</script>";
		}
	}
	// Fungsi Edit Grey KM
	public function edit_greykm($id='')
	{	
		$data['kode'] = $this->M_grey->kode_ordergrey();
		$data['get_barang'] = $this->M_grey->get_kdbrg();
		$data['ubah_data'] = $this->M_grey->view_edit_greykm($id);	
		$c['content'] = $this->load->view('finishing/grey/km/edit_dtlgreykm', $data);
		$this->load->view('finishing/dashboard', $c);
	}
	public function greykm_edit($id)
	{
		$ids = $this->input->post('kode_ordergry');
		$data = array(	'no_orderpp' 	=> $this->input->post('no_orderpp'),
						'tgl_dtl_order' => $this->input->post('tgl_dtl_order'),
						'kain_luar' 	=> $this->input->post('kain_luar'),
						'kode_brg' 		=> $this->input->post('kode_brg'),
						'gulung' 		=> $this->input->post('gulung'),
						'meter' 		=> $this->input->post('meter'),
						'yard' 			=> $this->input->post('yard'),
						'terima'		=> $this->input->post('terima')
			);
		$this->M_grey->edit_greykm($id,$data);
		redirect('grey/greykm/view_dtlgreykm/'.$ids, 'refresh');
	}

}

/* End of file greykm.php */
/* Location: ./application/controllers/greykm.php */