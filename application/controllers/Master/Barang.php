<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
		$this->load->helper(array('url','form','file'));
	}
//***********************************************************************************************************************************************************
	// Master/barang
	// =====================================================================
	// View Barang
	public function index()
	{ 	
		/*$c['coBeB'] = $this->load->view('finishing/coBeB');
		$this->load->view('finishing/dashboard',$c);*/
		$data['isi'] = $this->M_master->view_barang();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/barang/view_barang', $h);
	}

	public function tambah_barang()
	{
		$isi['get_jenis'] = $this->M_master->get_kdjenis();
		$isi['get_group'] = $this->M_master->get_kdgroup();
		$isi['get_proses'] = $this->M_master->get_kdproses();
		$isi['kode'] = $this->M_master->kode_brg();
		$h = $this->load->view('finishing/dashboard', $isi);
		$c['content'] = $this->load->view('finishing/master/barang/tambah_barang', $h);
		$this->load->view('finishing/dashboard', $c);
	}

	// Fungsi Insert barang
	public function simpan_barang()
	{
		$cek = $this->db->query("SELECT * FROM barang where kode_brg='".$this->input->post('kode_brg',TRUE)."'")->num_rows();
		if($cek <= 0){
				$kode_brg = $this->input->post('kode_brg', TRUE);
				$nama_brg = $this->input->post('nama_brg', TRUE);
				$kode_jenis = $this->input->post('kode_jenis', TRUE);
				$kode_group = $this->input->post('kode_group', TRUE);
				$kode_proses = $this->input->post('kode_proses', TRUE);
				$awalgryth = $this->input->post('awalgryth', TRUE);
				$awalgrybl = $this->input->post('awalgrybl', TRUE);
				$awalcmbth = $this->input->post('awalcmbth', TRUE);
				$awalcmbbl = $this->input->post('awalcmbbl', TRUE);

			$data = array(  
				"kode_brg" => $kode_brg,
				"nama_brg" => $nama_brg,
				"kode_jenis" => $kode_jenis,
				"kode_group" => $kode_group,
				"kode_proses" => $kode_proses,
				"awalgryth" => $awalgryth,
				"awalgrybl" => $awalgrybl,
				"awalcmbth" => $awalcmbth,
				"awalcmbbl" => $awalcmbbl
			);
			$sql = $this->M_master->simpan_barang($data);
			$allsql = array($sql);
			if($allsql){ // Jika sukses
				/*$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('master/barang','refresh');*/
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('master/barang')."';</script>";
			}else{ // Jika gagal
				/*$this->session->set_flashdata('error', 'Data gagal disimpan');
				redirect('master/barang','refresh');*/
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('master/barang')."';</script>";
			}

			redirect('master/barang','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf Kode Barang Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('master/barang/tambah_barang/').'")';
			echo '</script>';
		}

	}

	// Fungsi Hapus Barang
	public function hapus_barang($id)
	{
		$sql = $this->M_master->hapus_barang($id);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil dihapus');window.location = '".site_url('master/barang/')."';</script>";
			// $this->session->set_flashdata('success', 'Data berhasil dihapus');
			// redirect('master/barang','refresh');
		}else{ // Jika gagal
			 echo "<script>alert('Data gagal dihapus');window.location = '".site_url('master/barang/')."';</script>";
			// $this->session->set_flashdata('error', 'Data gagal dihapus');
			// redirect('master/barang','refresh');
		}
	}

	// fungsi Edit Barang
	public function edit_barang($id='')
	{	
		$data['get_jenis'] = $this->M_master->get_kdjenis();
		$data['get_group'] = $this->M_master->get_kdgroup();
		$data['get_proses'] = $this->M_master->get_kdproses();
		$data['ubah_data'] = $this->M_master->view_edit_barang($id);		
		$c['content'] = $this->load->view('finishing/master/barang/edit_barang', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function barang_edit($id)
	{
		$data = array(	'kode_brg' => $this->input->post('kode_brg'),
			'nama_brg' => $this->input->post('nama_brg'),
			'kode_jenis' => $this->input->post('kode_jenis'),
			'kode_group' => $this->input->post('kode_group'),
			'kode_proses' => $this->input->post('kode_proses'),
			'awalgryth' => $this->input->post('awalgryth'),
			'awalgrybl' => $this->input->post('awalgrybl'),
			'awalcmbth' => $this->input->post('awalcmbth'),
			'awalcmbbl' => $this->input->post('awalcmbbl')
			);
		$this->M_master->edit_barang($id,$data);
		redirect('master/barang', 'refresh');
	}

	
}
