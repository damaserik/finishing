<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kode extends CI_Controller {

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
	// =================================================================== KODE =====================================================================
	// ========================================== JENIS =========================================
	// Fungsi View Jenis
	public function view_jenis()
	{
		$data['kode'] = $this->M_master->kode_jns();
		$data['isi'] = $this->M_master->view_jenis();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/kode/view_jenis', $h);
	}
	// Fungsi Insert Jenis
	public function simpan_jenis()
	{
		$cek = $this->db->query("SELECT * FROM jenis where kode_jenis='".$this->input->post('kode_jenis',TRUE)."'")->num_rows();
		if($cek <= 0){
				$kode_jenis = $this->input->post('kode_jenis', TRUE);
				$nama_jenis = $this->input->post('nama_jenis', TRUE);

			$data = array(  
				"kode_jenis" => $kode_jenis,
				"nama_jenis" => $nama_jenis
			);
			$sql = $this->M_master->simpan_jenis($data);
			$allsql = array($sql);
			if($allsql){ // Jika sukses
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('master/kode/view_jenis')."';</script>";
			}else{ // Jika gagal
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('master/kode/view_jenis')."';</script>";
			}

			redirect('master/kode','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf Kode Jenis Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('master/kode/view_jenis/').'")';
			echo '</script>';
		}
	}

	// Fungsi Hapus Jenis
	public function hapus_jenis($id)
	{
		$sql = $this->M_master->hapus_jenis($id);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil dihapus');window.location = '".site_url('master/kode/view_jenis')."';</script>";
		}else{ // Jika gagal
			 echo "<script>alert('Data gagal dihapus');window.location = '".site_url('master/kode/view_jenis')."';</script>";
		}
	}

	// fungsi Edit Jenis
	public function edit_jenis($id='')
	{	
		$data['ubah_data'] = $this->M_master->view_edit_jenis($id);		
		$c['content'] = $this->load->view('finishing/master/kode/edit_jenis', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function jenis_edit($id)
	{
		$data = array('kode_jenis' => $this->input->post('kode_jenis'),
			'nama_jenis' => $this->input->post('nama_jenis')
			);
		$this->M_master->edit_jenis($id,$data);
		redirect('master/kode/view_jenis', 'refresh');
	}

	// ========================================== PROSES =========================================
	// Fungsi View Proses
	public function view_proses()
	{
		$data['kode'] = $this->M_master->kode_pros();
		$data['isi'] = $this->M_master->view_proses();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/kode/view_proses', $h);
	}
	// Fungsi Insert Proses
	public function simpan_proses()
	{
		$cek = $this->db->query("SELECT * FROM proses where kode_proses='".$this->input->post('kode_proses',TRUE)."'")->num_rows();
		if($cek <= 0){
				$kode_proses = $this->input->post('kode_proses', TRUE);
				$kel = $this->input->post('kel', TRUE);

			$data = array(  
				"kode_proses" => $kode_proses,
				"kel" => $kel
			);
			$sql = $this->M_master->simpan_proses($data);
			$allsql = array($sql);
			if($allsql){ // Jika sukses
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('master/kode/view_proses')."';</script>";
			}else{ // Jika gagal
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('master/kode/view_proses')."';</script>";
			}

			redirect('master/kode','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf Kode proses Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('master/kode/view_proses/').'")';
			echo '</script>';
		}
	}

	// Fungsi Hapus Proses
	public function hapus_proses($id)
	{
		$sql = $this->M_master->hapus_proses($id);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil dihapus');window.location = '".site_url('master/kode/view_proses')."';</script>";
		}else{ // Jika gagal
			 echo "<script>alert('Data gagal dihapus');window.location = '".site_url('master/kode/view_proses')."';</script>";
		}
	}

	// fungsi Edit Proses
	public function edit_proses($id='')
	{	
		$data['ubah_data'] = $this->M_master->view_edit_proses($id);		
		$c['content'] = $this->load->view('finishing/master/kode/edit_proses', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function proses_edit($id)
	{
		$data = array('kode_proses' => $this->input->post('kode_proses'),
			'kel' => $this->input->post('kel')
			);
		$this->M_master->edit_proses($id,$data);
		redirect('master/kode/view_proses', 'refresh');
	}
	// ========================================== GROUP =========================================
	// Fungsi View Group
	public function view_group()
	{
		$data['kode'] = $this->M_master->kode_grp();
		$data['isi'] = $this->M_master->view_group();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/kode/view_group', $h);
	}
	// Fungsi Insert group
	public function simpan_group()
	{
		$cek = $this->db->query("SELECT * FROM grup where kode_group='".$this->input->post('kode_group',TRUE)."'")->num_rows();
		if($cek <= 0){
				$kode_group = $this->input->post('kode_group', TRUE);
				$nama_group = $this->input->post('nama_group', TRUE);

			$data = array(  
				"kode_group" => $kode_group,
				"nama_group" => $nama_group
			);
			$sql = $this->M_master->simpan_group($data);
			$allsql = array($sql);
			if($allsql){ // Jika sukses
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('master/kode/view_group')."';</script>";
			}else{ // Jika gagal
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('master/kode/view_group')."';</script>";
			}

			redirect('master/kode','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf Kode group Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('master/kode/view_group/').'")';
			echo '</script>';
		}
	}

	// Fungsi Hapus group
	public function hapus_group($id)
	{
		$sql = $this->M_master->hapus_group($id);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil dihapus');window.location = '".site_url('master/kode/view_group')."';</script>";
		}else{ // Jika gagal
			 echo "<script>alert('Data gagal dihapus');window.location = '".site_url('master/kode/view_group')."';</script>";
		}
	}

	// fungsi Edit group
	public function edit_group($id='')
	{	
		$data['ubah_data'] = $this->M_master->view_edit_group($id);		
		$c['content'] = $this->load->view('finishing/master/kode/edit_group', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function group_edit($id)
	{
		$data = array('kode_group' => $this->input->post('kode_group'),
			'nama_group' => $this->input->post('nama_group')
			);
		$this->M_master->edit_group($id,$data);
		redirect('master/kode/view_group', 'refresh');
	}

	// ========================================== WO =========================================
	// Fungsi View WO
	public function view_wo()
	{
		$data['isi'] = $this->M_master->view_wo();
		$h = $this->load->view('finishing/dashboard', $data);
		$c['content'] = $this->load->view('finishing/master/kode/view_wo', $h);
	}
	// Fungsi Insert WO
	public function simpan_wo()
	{
		$cek = $this->db->query("SELECT * FROM wo where kode_wo='".$this->input->post('kode_wo',TRUE)."'")->num_rows();
		if($cek <= 0){
				$kode_wo = $this->input->post('kode_wo', TRUE);
				$nama_wo = $this->input->post('nama_wo', TRUE);

			$data = array(  
				"kode_wo" => $kode_wo,
				"nama_wo" => $nama_wo
			);
			$sql = $this->M_master->simpan_wo($data);
			$allsql = array($sql);
			if($allsql){ // Jika sukses
				echo "<script>alert('Data berhasil disimpan');window.location = '".site_url('master/kode/view_wo')."';</script>";
			}else{ // Jika gagal
				echo "<script>alert('Data gagal disimpan');window.location = '".site_url('master/kode/view_wo')."';</script>";
			}

			redirect('master/kode','refresh');
		}else{
			echo '<script language="javascript">';
			echo 'alert("Maaf Kode wo Sudah Ada")';
			echo '</script>';
			echo '<script language="javascript">';
			echo 'window.location=("'.site_url('master/kode/view_wo/').'")';
			echo '</script>';
		}
	}

	// Fungsi Hapus WO
	public function hapus_wo($id)
	{
		$sql = $this->M_master->hapus_wo($id);
		$allsql = array($sql);
		if($allsql){ // Jika sukses
			echo "<script>alert('Data berhasil dihapus');window.location = '".site_url('master/kode/view_wo')."';</script>";
		}else{ // Jika gagal
			 echo "<script>alert('Data gagal dihapus');window.location = '".site_url('master/kode/view_wo')."';</script>";
		}
	}

	// fungsi Edit WO
	public function edit_wo($id='')
	{	
		$data['ubah_data'] = $this->M_master->view_edit_wo($id);		
		$c['content'] = $this->load->view('finishing/master/kode/edit_wo', $data);
		$this->load->view('finishing/dashboard', $c);
	}

	public function wo_edit($id)
	{
		$data = array('kode_wo' => $this->input->post('kode_wo'),
			'nama_wo' => $this->input->post('nama_wo')
			);
		$this->M_master->edit_wo($id,$data);
		redirect('master/kode/view_wo', 'refresh');
	}

}