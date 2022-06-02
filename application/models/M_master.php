<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_master extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
//***********************************************************************************************************************************************************
	// ================================================================== MENU MASTER ===============================================================
	// ================================================================= BARANG =====================================================================
	// ========================================== BARANG =========================================
	public function view_barang()
	{
		$sql = "SELECT kode_brg,nama_brg,nama_jenis,nama_group,kel,awalgryth,awalgrybl,awalcmbth,awalcmbbl 
				FROM barang AS a
				JOIN jenis AS b ON a.kode_jenis=b.kode_jenis 
				JOIN grup AS c ON a.kode_group=c.kode_group
				JOIN proses AS d ON a.kode_proses=d.kode_proses
				ORDER BY nama_brg ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function simpan_barang($data)
	{
		$this->db->insert('barang', $data);
	}

	public function hapus_barang($id)
	{
		$this->db->where('kode_brg',$id)->delete('barang');
	}

	public function view_edit_barang($id)
	{
		$this->db->select('a.kode_brg,a.nama_brg,b.kode_jenis,b.nama_jenis,c.kode_group,c.nama_group,d.kode_proses,d.kel,a.awalgryth,a.awalgrybl,a.awalcmbth,a.awalcmbbl');
		$this->db->from('barang AS a');
		$this->db->join('jenis as b', 'a.kode_jenis = b.kode_jenis');
		$this->db->join('grup as c', 'a.kode_group = c.kode_group');
		$this->db->join('proses as d', 'a.kode_proses = d.kode_proses');
		$this->db->where('kode_brg', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_barang($id, $data)
	{
		$this->db->where('kode_brg', $id);
		$this->db->update('barang', $data);
	}

//***********************************************************************************************************************************************************
	// =============================================================== SALDO AWAL ====================================================================
	// ========================================== SALDO AWAL GREY =========================================
	public function view_awal_grey()
	{
		$sql = "SELECT kode_brg,nama_brg,nama_group,nama_jenis,awalgryth,awalgrybl,g01,g02,g03,g04,g05,g06,g07,g08,g09,g10,g11,g12 
				FROM barang AS a
				JOIN jenis AS b ON a.kode_jenis=b.kode_jenis 
				JOIN grup AS c ON a.kode_group=c.kode_group
				ORDER BY nama_brg ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}
	public function view_ubah_awal_grey($id)
	{
		$this->db->select('a.kode_brg,a.nama_brg,c.kode_group,c.nama_group,b.kode_jenis,b.nama_jenis,a.awalgryth,a.awalgrybl,g01,g02,g03,g04,g05,g06,g07,g08,g09,g10,g11,g12 ');
		$this->db->from('barang AS a');
		$this->db->join('jenis as b', 'a.kode_jenis = b.kode_jenis');
		$this->db->join('grup as c', 'a.kode_group = c.kode_group');
		$this->db->where('kode_brg', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function ubah_awal_grey($id, $data)
	{
		$this->db->where('kode_brg', $id);
		$this->db->update('barang', $data);
	}

	// ========================================== SALDO AWAL CAMBRIC PACKING =========================================
	public function view_cambric_packing()
	{
		$sql = "SELECT kode_brg,nama_brg,nama_group,nama_jenis,awalcmbth,awalcmbbl,c01,c02,c03,c04,c05,c06,c07,c08,c09,c10,c11,c12 
				FROM barang AS a
				JOIN jenis AS b ON a.kode_jenis=b.kode_jenis 
				JOIN grup AS c ON a.kode_group=c.kode_group
				ORDER BY nama_brg ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function view_ubah_cambric_packing($id)
	{
		$this->db->select('a.kode_brg,a.nama_brg,c.kode_group,c.nama_group,b.kode_jenis,b.nama_jenis,a.awalcmbth,a.awalcmbbl,c01,c02,c03,c04,c05,c06,c07,c08,c09,c10,c11,c12  ');
		$this->db->from('barang AS a');
		$this->db->join('jenis as b', 'a.kode_jenis = b.kode_jenis');
		$this->db->join('grup as c', 'a.kode_group = c.kode_group');
		$this->db->where('kode_brg', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function ubah_cambric_packing($id, $data)
	{
		$this->db->where('kode_brg', $id);
		$this->db->update('barang', $data);
	}

	// ========================================== SALDO AWAL CAMBRIC FOLDING =========================================
	public function view_cambric_folding()
	{
		$sql = "SELECT kode_brg,nama_brg,nama_group,nama_jenis,awalfldth,awalfldbl,f01,f02,f03,f04,f05,f06,f07,f08,f09,f10,f11,f12 
				FROM barang AS a
				JOIN jenis AS b ON a.kode_jenis=b.kode_jenis 
				JOIN grup AS c ON a.kode_group=c.kode_group
				ORDER BY nama_brg ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function view_ubah_cambric_folding($id)
	{
		$this->db->select('a.kode_brg,a.nama_brg,c.kode_group,c.nama_group,b.kode_jenis,b.nama_jenis,a.awalfldth,a.awalfldbl,f01,f02,f03,f04,f05,f06,f07,f08,f09,f10,f11,f12  ');
		$this->db->from('barang AS a');
		$this->db->join('jenis as b', 'a.kode_jenis = b.kode_jenis');
		$this->db->join('grup as c', 'a.kode_group = c.kode_group');
		$this->db->where('kode_brg', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function ubah_cambric_folding($id, $data)
	{
		$this->db->where('kode_brg', $id);
		$this->db->update('barang', $data);
	}


//***********************************************************************************************************************************************************
	// =================================================================== KODE =====================================================================
	// ========================================== JENIS =========================================
	public function view_jenis()
	{
		$sql = "SELECT * from jenis
				ORDER BY kode_jenis ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function simpan_jenis($data)
	{
		$this->db->insert('jenis', $data);
	}

	public function hapus_jenis($id)
	{
		$this->db->where('kode_jenis',$id)->delete('jenis');
	}

	public function view_edit_jenis($id)
	{
		$this->db->select('*');
		$this->db->from('jenis');
		$this->db->where('kode_jenis', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_jenis($id, $data)
	{
		$this->db->where('kode_jenis', $id);
		$this->db->update('jenis', $data);
	}


	// ========================================== PROSES =========================================
	public function view_proses()
	{
		$sql = "SELECT * from proses
				ORDER BY kode_proses ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function simpan_proses($data)
	{
		$this->db->insert('proses', $data);
	}

	public function hapus_proses($id)
	{
		$this->db->where('kode_proses',$id)->delete('proses');
	}

	public function view_edit_proses($id)
	{
		$this->db->select('*');
		$this->db->from('proses');
		$this->db->where('kode_proses', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_proses($id, $data)
	{
		$this->db->where('kode_proses', $id);
		$this->db->update('proses', $data);
	}


	// ========================================== GROUP =========================================
	public function view_group()
	{
		$sql = "SELECT * from grup
				ORDER BY kode_group ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function simpan_group($data)
	{
		$this->db->insert('grup', $data);
	}

	public function hapus_group($id)
	{
		$this->db->where('kode_group',$id)->delete('grup');
	}

	public function view_edit_group($id)
	{
		$this->db->select('*');
		$this->db->from('grup');
		$this->db->where('kode_group', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_group($id, $data)
	{
		$this->db->where('kode_group', $id);
		$this->db->update('grup', $data);
	}

	// ========================================== WO =========================================
	public function view_wo()
	{
		$sql = "SELECT * from wo
				ORDER BY kode_wo ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function simpan_wo($data)
	{
		$this->db->insert('wo', $data);
	}

	public function hapus_wo($id)
	{
		$this->db->where('kode_wo',$id)->delete('wo');
	}

	public function view_edit_wo($id)
	{
		$this->db->select('*');
		$this->db->from('wo');
		$this->db->where('kode_wo', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_wo($id, $data)
	{
		$this->db->where('kode_wo', $id);
		$this->db->update('wo', $data);
	}



//***********************************************************************************************************************************************************
	// ============================================================== KODE UNIK =================================================================
	// BARANG
	function kode_brg()
		{
	 		$CI =& get_instance();
			$CI->load->database('default');
			//rancangan kode GL
			$kode_brg="B"."%";
			$sql="SELECT SUBSTRING(MAX(kode_brg),2) AS maxNo FROM barang where kode_brg like('$kode_brg')";
			$row = $CI->db->query($sql);
			foreach ($row->result_array() as $rowmax)
			{	
			}
			//buat kode barang baru dengan kode barang terbesar+1
			$noB_tmp		=$rowmax['maxNo'];
			$noB			=$noB_tmp+1;	
			if(strlen($noB)==1){
				$kode_brg="B"."0000".$noB;
			}elseif(strlen($noB)==2){
				$kode_brg="B"."000".$noB;
			}elseif(strlen($noB)==3){
				$kode_brg="B"."00".$noB;
			}elseif(strlen($noB)==4){
				$kode_brg="B"."0".$noB;
			}elseif(strlen($noB)==5){
				$kode_brg="B".$noB;
			}
			
			return $kode_brg;
		}

	// JENIS
	function kode_jns()
		{
	 		$CI =& get_instance();
			$CI->load->database('default');
			//rancangan kode GL
			$kode_jenis="J"."%";
			$sql="SELECT SUBSTRING(MAX(kode_jenis),2) AS maxNo FROM jenis where kode_jenis like('$kode_jenis')";
			$row = $CI->db->query($sql);
			foreach ($row->result_array() as $rowmax)
			{	
			}
			//buat kode jenis baru dengan kode jenis terbesar+1
			$noJ_tmp		=$rowmax['maxNo'];
			$noJ			=$noJ_tmp+1;	
			if(strlen($noJ)==1){
				$kode_jenis="J"."000".$noJ;
			}elseif(strlen($noJ)==2){
				$kode_jenis="J"."00".$noJ;
			}elseif(strlen($noJ)==3){
				$kode_jenis="J"."0".$noJ;
			}elseif(strlen($noJ)==4){
				$kode_jenis="J".$noJ;
			}
			
			return $kode_jenis;
		}

	// PROSES
	function kode_pros()
		{
	 		$CI =& get_instance();
			$CI->load->database('default');
			//rancangan kode GL
			$kode_proses="P"."%";
			$sql="SELECT SUBSTRING(MAX(kode_proses),2) AS maxNo FROM proses where kode_proses like('$kode_proses')";
			$row = $CI->db->query($sql);
			foreach ($row->result_array() as $rowmax)
			{	
			}
			//buat kode proses baru dengan kode proses terbesar+1
			$noP_tmp		=$rowmax['maxNo'];
			$noP			=$noP_tmp+1;	
			if(strlen($noP)==1){
				$kode_proses="P"."000".$noP;
			}elseif(strlen($noP)==2){
				$kode_proses="P"."00".$noP;
			}elseif(strlen($noP)==3){
				$kode_proses="P"."0".$noP;
			}elseif(strlen($noP)==4){
				$kode_proses="P".$noP;
			}
			  
			return $kode_proses;
		}

	// GROUP
	function kode_grp()
		{
	 		$CI =& get_instance();
			$CI->load->database('default');
			//rancangan kode GL
			$kode_group="G"."%";
			$sql="SELECT SUBSTRING(MAX(kode_group),2) AS maxNo FROM grup where kode_group like('$kode_group')";
			$row = $CI->db->query($sql);
			foreach ($row->result_array() as $rowmax)
			{	
			}
			//buat kode group baru dengan kode group terbesar+1
			$noG_tmp		=$rowmax['maxNo'];
			$noG			=$noG_tmp+1;	
			if(strlen($noG)==1){
				$kode_group="G"."000".$noG;
			}elseif(strlen($noG)==2){
				$kode_group="G"."00".$noG;
			}elseif(strlen($noG)==3){
				$kode_group="G"."0".$noG;
			}elseif(strlen($noG)==4){
				$kode_group="G".$noG;
			}
			
			return $kode_group;
		}

	// FUNGSI MEMANGGIL KODE UNTUK OPTION INPUTAN
	public function get_kdjenis()
	{
		$this->db->select('*');
		$this->db->order_by('kode_jenis', 'asc');
		$this->db->from('jenis');
		return $this->db->get('');
	}
	public function get_kdgroup()
	{
		$this->db->select('*');
		$this->db->order_by('kode_group', 'asc');
		$this->db->from('grup');
		return $this->db->get('');
	}
	public function get_kdproses()
	{
		$this->db->select('*');
		$this->db->order_by('kode_proses', 'asc');
		$this->db->from('proses');
		return $this->db->get('');
	}


}

/* End of file M_master */
/* Location: ./application/models/M_master */