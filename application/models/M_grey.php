<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_grey extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
//***********************************************************************************************************************************************************

	// ================================================================== INPUT GREY -================================================================
	// ================================================================= GREY WO =====================================================================
	// ========================================== GREY WO =========================================
	public function view_greywo()
	{
		$sql = "SELECT a.kode_ordergry,a.no_ordergry,a.tgl_order,b.nama_group
				FROM mtgrey_hdr AS a
				JOIN grup AS b ON a.kode_group=b.kode_group
				WHERE b.nama_group='WO'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function view_dtlgreywo($id)
	{
		$sql = "SELECT f.kode_ordergry,a.kode_detail,a.no_ordergry,a.tgl_dtl_order,a.no_orderpp,a.kain_luar,a.kode_wo,b.nama_brg,a.gulung,a.meter,a.yard,a.terima,a.return,c.nama_jenis,d.kel,e.nama_group
				FROM mtgrey_detail AS a
				JOIN mtgrey_hdr AS f ON a.no_ordergry=f.no_ordergry
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN jenis AS c ON b.kode_jenis=c.kode_jenis
				JOIN proses AS d ON b.kode_proses=d.kode_proses 
				JOIN grup AS e ON b.kode_group=e.kode_group
				where f.kode_ordergry='$id'
				ORDER BY tgl_dtl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function simpan_greywohdr($data)
	{
		return $this->db->insert('mtgrey_hdr', $data);
	}

	function simpan_greywodtl($data)
	{
		return $this->db->insert_batch('mtgrey_detail', $data);
	}

	function delete_greywo($id)
	{
		$this->db->where('kode_ordergry', $id)->delete('mtgrey_hdr');
		// $this->db->where('kode_ordergry', $id);
		// $this->db->update('mtgrey_hdr', $data);
	}

	function delete_greywodtl($id)
	{
		$this->db->where('kode_detail', $id)->delete('mtgrey_detail');
		// $this->db->where('kode_detail', $id);
		// $this->db->update('mtgrey_detail', $data);
	}

	function delete_greywodtl2($id)
	{
		$this->db->where('kode_ordergry', $id)->delete('mtgrey_detail');
		// $this->db->where('kode_detail', $id);
		// $this->db->update('mtgrey_detail', $data);
	}

	// function delete_greywodtl2($id,$data)
	// {
	// 	$this->db->where('kode_detail', $id);
	// 	$this->db->update('mtgrey_detail', $data);
	// }

	function view_gryhdr($id,$data)
	{
		$this->db->where('kode_ordergry', $id)
				 ->update('mtgrey_hdr',$data);
	}
		function view_grydtl($id,$data)
	{
		$this->db->where('kode_ordergry', $id)
				 ->update('mtgrey_detail',$data);
	}

	public function view_edit_greywo($id)
	{
		$this->db->select('f.kode_ordergry,a.kode_detail,a.no_ordergry,a.tgl_dtl_order,a.no_orderpp,a.kain_luar,a.kode_wo,b.kode_brg,b.nama_brg,a.gulung,a.meter,a.yard,a.terima,c.kode_jenis,c.nama_jenis,d.kode_proses,d.kel,e.kode_group,e.nama_group');
		$this->db->from('mtgrey_detail AS a');
		$this->db->join('mtgrey_hdr as f', 'a.no_ordergry = f.no_ordergry');
		$this->db->join('barang as b', 'a.kode_brg = b.kode_brg');
		$this->db->join('jenis as c', 'b.kode_jenis = c.kode_jenis');
		$this->db->join('proses as d', 'b.kode_proses = d.kode_proses');
		$this->db->join('grup as e', 'b.kode_group = e.kode_group');
		$this->db->where('kode_detail', $id);
		$this->db->group_by('tgl_dtl_order');
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_greywo($id, $data)
	{
		$this->db->where('kode_detail', $id);
		$this->db->update('mtgrey_detail', $data);
	}

//***********************************************************************************************************************************************************
	// ================================================================= GREY KM =====================================================================
	// ========================================== GREY KM =========================================
	public function view_greykm()
	{
		$sql = "SELECT a.kode_ordergry,a.no_ordergry,a.tgl_order,b.nama_group
				FROM mtgrey_hdr AS a
				JOIN grup AS b ON a.kode_group=b.kode_group
				WHERE b.nama_group='KM'
				ORDER BY tgl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function view_dtlgreykm($id)
	{
		$sql = "SELECT f.kode_ordergry,a.kode_detail,a.no_ordergry,a.tgl_dtl_order,a.no_orderpp,a.kain_luar,b.nama_brg,a.gulung,a.meter,a.yard,a.terima,a.return,c.nama_jenis,d.kel,e.nama_group
				FROM mtgrey_detail AS a
				JOIN mtgrey_hdr AS f ON a.no_ordergry=f.no_ordergry
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN jenis AS c ON b.kode_jenis=c.kode_jenis
				JOIN proses AS d ON b.kode_proses=d.kode_proses 
				JOIN grup AS e ON b.kode_group=e.kode_group
				where f.kode_ordergry='$id'
				ORDER BY tgl_dtl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function simpan_greykmhdr($data)
	{
		return $this->db->insert('mtgrey_hdr', $data);
	}

	function simpan_greykmdtl($data)
	{
		return $this->db->insert_batch('mtgrey_detail', $data);
	}

	function delete_greykm($id)
	{
		$this->db->where('kode_ordergry', $id)->delete('mtgrey_hdr');
	}

	function delete_greykmdtl($id)
	{
		$this->db->where('kode_detail', $id)->delete('mtgrey_detail');
	}

	function delete_greykmdtl2($id)
	{
		$this->db->where('kode_ordergry', $id)->delete('mtgrey_detail');
	}

	function view_grykmhdr($id,$data)
	{
		$this->db->where('kode_ordergry', $id)
				 ->update('mtgrey_hdr',$data);
	}
		function view_grykmdtl($id,$data)
	{
		$this->db->where('kode_ordergry', $id)
				 ->update('mtgrey_detail',$data);
	}

	public function view_edit_greykm($id)
	{
		$this->db->select('f.kode_ordergry,a.kode_detail,a.no_ordergry,a.tgl_dtl_order,a.no_orderpp,a.kain_luar,a.kode_wo,b.kode_brg,b.nama_brg,a.gulung,a.meter,a.yard,a.terima,c.kode_jenis,c.nama_jenis,d.kode_proses,d.kel,e.kode_group,e.nama_group');
		$this->db->from('mtgrey_detail AS a');
		$this->db->join('mtgrey_hdr as f', 'a.no_ordergry = f.no_ordergry');
		$this->db->join('barang as b', 'a.kode_brg = b.kode_brg');
		$this->db->join('jenis as c', 'b.kode_jenis = c.kode_jenis');
		$this->db->join('proses as d', 'b.kode_proses = d.kode_proses');
		$this->db->join('grup as e', 'b.kode_group = e.kode_group');
		$this->db->where('kode_detail', $id);
		$this->db->group_by('tgl_dtl_order');
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_greykm($id, $data)
	{
		$this->db->where('kode_detail', $id);
		$this->db->update('mtgrey_detail', $data);
	}

//***********************************************************************************************************************************************************
	// ================================================================= GREY DIKERJAKAN =====================================================================
	// ========================================== GREY DIKERJAKAN =========================================

	public function view_greydkrj()
	{
		$sql = "SELECT f.kode_ordergry,a.kode_detail,a.no_ordergry,a.tgl_dtl_order,a.kode_wo,a.no_orderpp,a.kain_luar,a.kode_brg,b.nama_brg,
						a.kode_terima_trans,a.gulung,a.terima,a.meter,a.yard,
						a.kode_proses_trans,a.tgl_proses,a.gulung_proses,a.yard_proses,
						a.kode_return_trans,a.gulung_return,a.return,
						c.kode_jenis,c.nama_jenis,d.kode_proses,d.kel,e.kode_group,e.nama_group
				FROM mtgrey_detail AS a
				JOIN mtgrey_hdr AS f ON a.no_ordergry=f.no_ordergry
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN jenis AS c ON b.kode_jenis=c.kode_jenis
				JOIN proses AS d ON b.kode_proses=d.kode_proses 
				JOIN grup AS e ON b.kode_group=e.kode_group
				ORDER BY tgl_proses, no_orderpp ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function view_edit_greydkrj($id)
	{
		$this->db->select('f.kode_ordergry,a.kode_detail,a.no_ordergry,a.tgl_dtl_order,a.kode_wo,a.no_orderpp,a.kain_luar,a.kode_brg,b.nama_brg,
						a.kode_terima_trans,a.gulung,a.terima,a.meter,a.yard,
						a.kode_proses_trans,a.tgl_proses,a.gulung_proses,a.yard_proses,
						a.kode_return_trans,a.gulung_return,a.return,
						c.kode_jenis,c.nama_jenis,d.kode_proses,d.kel,e.kode_group,e.nama_group');
		$this->db->from('mtgrey_detail AS a');
		$this->db->join('mtgrey_hdr as f', 'a.no_ordergry = f.no_ordergry');
		$this->db->join('barang as b', 'a.kode_brg = b.kode_brg');
		$this->db->join('jenis as c', 'b.kode_jenis = c.kode_jenis');
		$this->db->join('proses as d', 'b.kode_proses = d.kode_proses');
		$this->db->join('grup as e', 'b.kode_group = e.kode_group');
		$this->db->where('kode_detail', $id);
		$this->db->group_by('tgl_dtl_order', 'desc');
		$hasil = $this->db->get();
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function edit_greydkrj($id, $data)
	{
		$this->db->where('kode_detail', $id);
		$this->db->update('mtgrey_detail', $data);
	}

//***********************************************************************************************************************************************************
	// =============================================================== GREY EDIT STATUS =====================================================================
	// ========================================== GREY EDIT BELUM SELESAI =========================================

	public function view_greystat1()
	{
		$sql = "SELECT a.kode_detail,a.no_orderpp,a.tgl_dtl_order,a.kode_wo,a.kain_luar,a.kode_brg,b.nama_brg,
						c.kode_jenis,c.nama_jenis,d.kode_proses,d.kel,e.kode_group,e.nama_group,
						a.kode_terima_trans,a.gulung,a.meter,a.yard,a.selesai
				FROM mtgrey_detail AS a
				JOIN mtgrey_hdr AS f ON a.no_ordergry=f.no_ordergry
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN jenis AS c ON b.kode_jenis=c.kode_jenis
				JOIN proses AS d ON b.kode_proses=d.kode_proses 
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE a.selesai='T'
				ORDER BY tgl_dtl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function edit_greystat1($id, $data)
	{
		$this->db->where('kode_detail', $id);
		$this->db->update('mtgrey_detail', $data);
	}

	// ============================================================= GREY EDIT SELESAI ====================================================================
	// ========================================== GREY EDIT SELESAI =========================================

	public function view_greystat2()
	{
		$sql = "SELECT a.kode_detail,a.no_orderpp,a.tgl_dtl_order,a.kode_wo,a.kain_luar,a.kode_brg,b.nama_brg,
						c.kode_jenis,c.nama_jenis,d.kode_proses,d.kel,e.kode_group,e.nama_group,
						a.kode_terima_trans,a.gulung,a.meter,a.yard,a.selesai
				FROM mtgrey_detail AS a
				JOIN mtgrey_hdr AS f ON a.no_ordergry=f.no_ordergry
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN jenis AS c ON b.kode_jenis=c.kode_jenis
				JOIN proses AS d ON b.kode_proses=d.kode_proses 
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE a.selesai='Y'
				ORDER BY tgl_dtl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function edit_greystat2($id, $data)
	{
		$this->db->where('kode_detail', $id);
		$this->db->update('mtgrey_detail', $data);
	}

	// ============================================================= LAPORAN MUTASI GREY ==================================================================
	// ========================================== LAPORAN MUTASI GREY =========================================

	public function view_greylap()
	{
		$sql = "SELECT a.kode_detail,a.no_orderpp,a.tgl_dtl_order,a.kode_wo,a.kain_luar,a.kode_brg,b.nama_brg,
						c.kode_jenis,c.nama_jenis,d.kode_proses,d.kel,e.kode_group,e.nama_group,
						a.kode_terima_trans,a.gulung,a.meter,a.yard,a.selesai
				FROM mtgrey_detail AS a
				JOIN mtgrey_hdr AS f ON a.no_ordergry=f.no_ordergry
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN jenis AS c ON b.kode_jenis=c.kode_jenis
				JOIN proses AS d ON b.kode_proses=d.kode_proses 
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE a.selesai='Y'
				ORDER BY tgl_dtl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}


//***********************************************************************************************************************************************************
	// ============================================================== KODE UNIK =================================================================
	// ========================================== KODE ORDER GREY =========================================
	function kode_ordergrey()
		{
	 		$CI =& get_instance();
			$CI->load->database('default');
			//rancangan kode GL
			$kode_OG="OG".date('ym')."%";
			$sql="SELECT SUBSTRING(MAX(kode_ordergry),7,5) AS maxNo FROM mtgrey_hdr where kode_ordergry like('$kode_OG')";
			$row = $CI->db->query($sql);
			foreach ($row->result_array() as $rowmax)
			{	
			}
			//buat noPO baru dengan noPO terbesar+1
			$noOG_tmp		=$rowmax['maxNo'];
			$noOG			=$noOG_tmp+1;	
			$kode_tanggal	=date("ym");
			if(strlen($noOG)==1){
				$kode_OG="OG".$kode_tanggal."0000".$noOG;
			}elseif(strlen($noOG)==2){
				$kode_OG="OG".$kode_tanggal."000".$noOG;
			}elseif(strlen($noOG)==3){
				$kode_OG="OG".$kode_tanggal."00".$noOG;
			}elseif(strlen($noOG)==4){
				$kode_OG="OG".$kode_tanggal."0".$noOG;
			}elseif(strlen($noOG)==5){
				$kode_OG="OG".$kode_tanggal.$noOG;
			}
			
			return $kode_OG;
		}

	// FUNGSI MEMANGGIL KODE UNTUK OPTION INPUTAN
	public function get_kdbrg()
	{
		$sql = "SELECT a.kode_brg,a.nama_brg,b.kode_jenis,b.nama_jenis,c.kode_group,c.nama_group,d.kode_proses,d.kel
		FROM barang AS a
		JOIN jenis AS b ON a.kode_jenis = b.kode_jenis
		JOIN grup AS c ON a.kode_group = c.kode_group
		JOIN proses AS d ON a.kode_proses = d.kode_proses
		ORDER BY kode_brg ASC";
		$data = $this->db->query($sql);
		return $data->result();
	}
	public function get_kdwo()
	{
		$this->db->select('*');
		$this->db->order_by('kode_wo', 'asc');
		$this->db->from('wo');
		return $this->db->get('');
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}


}

/* End of file M_grey.php */
/* Location: ./application/models/M_grey.php */