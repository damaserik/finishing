<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_cambric extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
//***********************************************************************************************************************************************************
	// ===================================================================== INPUT CAMBRIC ==================================================================
	// ================================================================= CAMBRIC FOLDING ====================================================================
	// ========================================== CAMBRIC FOLDING =========================================
	// public function view_folding()
	// {
	// 		$sql = "SELECT kode_detail,no_orderppcmb,tgl_folding,a.kode_brg,b.nama_brg,a.kode_wo,no_gulfold, gulung_folding,
	// 			SUM(cutting) AS total_cutting,SUM(sisa) AS total_sisa,SUM(folding) AS total_folding, 
	// 			kode_folding_trans,nama_group,nama_jenis,kel 
	// 			FROM mtcmb_detail AS a
	// 			JOIN barang AS b ON a.kode_brg=b.kode_brg
	// 			JOIN proses AS c ON b.kode_proses=c.kode_proses
	// 			JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
	// 			JOIN grup AS e ON b.kode_group=e.kode_group
	// 			WHERE kode_folding_trans>0 AND kode_packing_trans <='2'
	// 			ORDER BY tgl_folding DESC";
	// 	$data = $this->db->query($sql);
	// 	return $data->result();
	// }
	public function view_foldingtgl($tgl_folding)
	{
			$sql = "SELECT kode_dtl_folding,no_orderppcmb,tgl_folding,a.kode_brg,b.nama_brg,a.kode_wo,no_gulfold,gulung_folding,cutting,sisa,folding,
			SUM(cutting) AS total_cutting,SUM(sisa) AS total_sisa,SUM(folding) AS total_folding, 
			kode_folding_trans,nama_group,nama_jenis,kel
				FROM mtcmb_folding AS a
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_folding_trans='1'
				AND tgl_folding='$tgl_folding'
				GROUP BY kode_dtl_folding";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function view_tgl($tgl_fold)
	{
			$sql = "SELECT kode_dtl_folding,no_orderppcmb,tgl_folding,a.kode_brg,b.nama_brg,a.kode_wo,no_gulfold,gulung_folding,cutting,sisa,folding,
			SUM(cutting) AS total_cutting,SUM(sisa) AS total_sisa,SUM(folding) AS total_folding, 
			kode_folding_trans,nama_group,nama_jenis,kel
				FROM mtcmb_folding AS a
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_folding_trans='1'
				AND tgl_folding='$tgl_fold'
				GROUP BY kode_dtl_folding";
		$data = $this->db->query($sql);
		return $data->result();
	}
	
	function simpan_folding($data)
	{
		return $this->db->insert('mtcmb_folding', $data);
	}
	public function hapus_folding($id)
	{
		$this->db->where('kode_dtl_folding', $id)->delete('mtcmb_folding');
	}
	public function edit_folding($id, $data)
	{
		$this->db->where('kode_dtl_folding', $id);
		$this->db->update('mtcmb_folding', $data);
	}

	// ================================================================= CAMBRIC PACKING ====================================================================
	// ========================================== CAMBRIC PACKING =========================================
	public function view_packingtgl($tgl_packing)
	{
		$sql = "SELECT kode_dtl_packing,no_orderppcmb,tgl_packing,a.kode_brg,b.nama_brg,a.kode_wo,packing,
				no_gulpack,gulung_packing,SUM(packing) AS total_packing,
				kode_packing_trans,nama_group,nama_jenis,kel
				FROM mtcmb_packing AS a
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_packing_trans='2'
				AND tgl_packing='$tgl_packing'
				GROUP BY kode_dtl_packing ";
		$data = $this->db->query($sql);
		return $data->result();
	}
	function simpan_packing($data)
	{
		return $this->db->insert('mtcmb_packing', $data);
	}
	// public function simpan_packing($id, $data)
	// {
	// 	$this->db->where('kode_detail', $id);
	// 	$this->db->update('mtcmb_detail', $data);
	// }
	public function hapus_packing($id, $data)
	{
		$this->db->where('kode_dtl_packing', $id)->delete('mtcmb_packing');

		// $this->db->where('kode_detail', $id);
		// $this->db->update('mtcmb_detail', $data);
	}
	public function edit_packing($id, $data)
	{
		$this->db->where('kode_dtl_packing', $id);
		$this->db->update('mtcmb_packing', $data);
	}


	// =============================================================PENGELUARAN CAMBRIC KE NIAGA===========================================================
	// ========================================== CAMBRIC NIAGA =========================================
	
	public function view_mtsniaga()
	{
		$sql = "SELECT a.kode_ordercmb,a.no_ordercmb,a.tgl_order,a.kode_group,c.nama_group
				FROM mtcmb_gdg_hdr AS a
				JOIN grup AS c ON a.kode_group=c.kode_group
				GROUP BY no_ordercmb
				ORDER BY tgl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}	

	public function view_dtlmtsniaga($id)
	{
		$sql = "SELECT kode_detail,f.kode_ordercmb,f.no_ordercmb,no_orderppcmb,tgl_kegudang,a.kode_brg,b.nama_brg,a.kode_wo,
				gulung_gdg,kegudang,SUM(kegudang)AS kegud,mtsgudang,kode_stdpot,a.return,kode_gudang_trans,nama_group,nama_jenis,kel
				FROM mtcmb_detail AS a
				JOIN mtcmb_gdg_hdr AS f ON a.kode_ordercmb=f.kode_ordercmb
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_gudang_trans >= 3 
				AND f.kode_ordercmb='$id'
				GROUP BY kode_detail";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function simpan_cmbhdr($data)
	{
		return $this->db->insert('mtcmb_gdg_hdr', $data);
	}

	function simpan_cmbdtl($data)
	{
		return $this->db->insert_batch('mtcmb_detail', $data);
	}

	function view_mtshdr($id,$data)
	{
		$this->db->where('kode_ordercmb', $id)
				 ->update('mtcmb_gdg_hdr',$data);
	}
		function view_mtsdtl($id,$data)
	{
		$this->db->where('kode_ordercmb', $id)
				 ->update('mtcmb_detail',$data);
	}
	// public function hapus_packing($id, $data)
	// {
	// 	$this->db->where('kode_detail', $id);
	// 	$this->db->update('mtcmb_detail', $data);
	// }
	// public function edit_packing($id, $data)
	// {
	// 	$this->db->where('kode_detail', $id);
	// 	$this->db->update('mtcmb_detail', $data);
	// }

	// ============================================================= CAMBRIC SALDO PACKING ================================================================
	// ====================================== CAMBRIC SALDO PACKING =====================================
	public function view_saldopacking()
	{
		$sql = "SELECT kode_dtl_packing,no_orderppcmb,tgl_packing,a.kode_brg,b.nama_brg,a.kode_wo,packing,
				no_gulpack,gulung_packing,SUM(packing) AS total_packing,kode_saldo_trans,saldo_awal,
				kode_packing_trans,nama_group,nama_jenis,kel
				FROM mtcmb_packing AS a
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_saldo_trans>'0' and saldo_awal>'0' and tgl_saldo IS NOT NULL
				GROUP BY kode_dtl_packing 
				ORDER BY tgl_saldo DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function simpan_saldopacking($id, $data)
	{
		$this->db->where('kode_dtl_packing', $id);
		$this->db->update('mtcmb_packing', $data);
	}

	// ============================================================ LAPORAN MUTASI CAMBRIC ================================================================
	// ========================================== LAPORAN MUTASI CAMBRIC =========================================

	public function view_camlap()
	{
		$sql = "SELECT kode_dtl_folding,no_orderppcmb,tgl_folding,a.kode_brg,b.nama_brg,a.kode_wo,no_gulfold,gulung_folding,cutting,sisa,folding,
			SUM(cutting) AS total_cutting,SUM(sisa) AS total_sisa,SUM(folding) AS total_folding, 
			kode_folding_trans,nama_group,nama_jenis,kel
				FROM mtcmb_folding AS a
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_folding_trans='1'
				AND tgl_folding='$tgl_folding'
				GROUP BY kode_dtl_folding";
		$data = $this->db->query($sql);
		return $data->result();
	}

//***********************************************************************************************************************************************************
	// ============================================================== KODE UNIK =================================================================
	// ========================================== KODE =========================================	
	// FUNGSI MEMANGGIL KODE GREY PER PP UNTUK OPTION INPUTAN FOLDING
	public function get_greypp()
	{
		$sql = "SELECT a.no_orderpp,a.tgl_dtl_order,a.kode_brg,b.nama_brg,a.kode_wo,b.kode_jenis,c.nama_jenis,b.kode_proses,d.kel,b.kode_group,e.nama_group,f.kode_ordergry,a.kode_detail,a.no_ordergry,a.tgl_dtl_order				
				FROM mtgrey_detail AS a
				JOIN mtgrey_hdr AS f ON a.no_ordergry=f.no_ordergry
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN jenis AS c ON b.kode_jenis=c.kode_jenis
				JOIN proses AS d ON b.kode_proses=d.kode_proses 
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE a.selesai='T' and kode_proses_trans='2'
				ORDER BY tgl_dtl_order DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}
	// FUNGSI MEMANGGIL KODE FOLDING PER PP UNTUK OPTION INPUTAN PACKING
	public function get_foldpp()
	{
		$sql = "SELECT a.kode_dtl_folding,a.no_orderppcmb,a.tgl_folding,a.kode_brg,b.nama_brg,a.kode_wo,b.kode_group,e.nama_group,b.kode_jenis,d.nama_jenis,b.kode_proses,c.kel
				FROM mtcmb_folding AS a
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_folding_trans='1'
				GROUP BY no_orderppcmb,tgl_folding,kode_brg,kode_wo,kode_group,kode_jenis,kode_proses,kel
				ORDER BY tgl_folding DESC ";
		$data = $this->db->query($sql);
		return $data->result();
	}
	// FUNGSI MEMANGGIL KODE PACKING PER PP UNTUK OPTION INPUTAN MUTASI
	public function get_packpp()
	{
		$sql = "SELECT a.kode_dtl_packing,a.no_orderppcmb,a.tgl_packing,a.kode_brg,b.nama_brg,a.kode_wo,b.kode_group,e.nama_group,b.kode_jenis,d.nama_jenis,b.kode_proses,c.kel
				FROM mtcmb_packing AS a
				JOIN barang AS b ON a.kode_brg=b.kode_brg
				JOIN proses AS c ON b.kode_proses=c.kode_proses
				JOIN jenis AS d ON b.kode_jenis=d.kode_jenis
				JOIN grup AS e ON b.kode_group=e.kode_group
				WHERE kode_packing_trans= '2'
				ORDER BY tgl_packing DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}
	function kode_ordercmb()
		{
	 		$CI =& get_instance();
			$CI->load->database('default');
			//rancangan kode GL
			$kode_CM="CM".date('ym')."%";
			$sql="SELECT SUBSTRING(MAX(kode_ordercmb),7,5) AS maxNo FROM mtcmb_gdg_hdr where kode_ordercmb like('$kode_CM')";
			$row = $CI->db->query($sql);
			foreach ($row->result_array() as $rowmax)
			{	
			}
			//buat noPO baru dengan noPO terbesar+1
			$noCM_tmp		=$rowmax['maxNo'];
			$noCM			=$noCM_tmp+1;	
			$kode_tanggal	=date("ym");
			if(strlen($noCM)==1){
				$kode_CM="CM".$kode_tanggal."0000".$noCM;
			}elseif(strlen($noOG)==2){
				$kode_CM="CM".$kode_tanggal."000".$noCM;
			}elseif(strlen($noOG)==3){
				$kode_CM="CM".$kode_tanggal."00".$noCM;
			}elseif(strlen($noOG)==4){
				$kode_CM="CM".$kode_tanggal."0".$noCM;
			}elseif(strlen($noOG)==5){
				$kode_CM="CM".$kode_tanggal.$noCM;
			}
			
			return $kode_CM;
		}

}
/* End of file M_cambric.php */
/* Location: ./application/models/M_cambric.php */