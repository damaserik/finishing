<br><br><br>
<div class="container col-md-9">
	<div class="card card-outline card-dark">

		<div class="card bg-light">
		  <div class="card-body">		
	        	<form method="POST" action="<?php echo site_url('cambric/campacking/simpan_packing/')?>">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Mutasi Grey Harian Pertanggal</b></label>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1" align="left" style="margin-top: 8px;">
					    <label>Mulai Tgl</label>
				    </div>
				    <div class="form-group col-md-2">
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>&ensp;S/D Tgl</label>
				    </div>
					<div class="form-group col-md-2">
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>				
				    <div class="form-group col-md-1"align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Detail</button>
				    </div>
					<div class="form-group col-md-1">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Rekap</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Mutasi Stok Grey Bulanan</b></label>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1" align="left" style="margin-top: 8px;">
					    <label>S/D Tgl</label>
				    </div>
				    <div class="form-group col-md-2">
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>&nbsp;&ensp;				
				    <div class="form-group col-md-1" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Preview</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Penerimaan Grey Pertanggal</b></label>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1" align="left" style="margin-top: 8px;">
					    <label>Mulai Tgl</label>
				    </div>
				    <div class="form-group col-md-2">
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>&ensp;S/D Tgl</label>
				    </div>
					<div class="form-group col-md-2">
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>			
				    <div class="form-group col-md-1" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Detail</button>
				    </div>
					<div class="form-group col-md-1">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Rekap</button>
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>Grup</label>
				    </div>
					<div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--pilih--</option>
							<option value="1">KM</option>
							<option value="2">WO</option>
							<option value="3">REP</option>
			 			</select>
					    </div>
				    </div>
				    <div class="form-group col-md-1" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Detail</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Grey Dikerjakan/Proses/Retur</b></label>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1" align="left" style="margin-top: 8px;">
					    <label>Mulai Tgl</label>
				    </div>
				    <div class="form-group col-md-2">
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>&ensp;S/D Tgl</label>
				    </div>
					<div class="form-group col-md-2">
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>		
				    <div class="form-group col-md-1" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Detail</button>
				    </div>
				    <div class="form-group col-md-1" align="right">
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>Grup</label>
				    </div>
					<div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--pilih--</option>
							<option value="1">KM</option>
							<option value="2">WO</option>
							<option value="3">REP</option>
			 			</select>
					    </div>
				    </div>
				    <div class="form-group col-md-1" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Detail</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
<!-- 				<div class="row">
					<div class="form-group col-md-10">
						<div class="form-group float-left">
						<input type="submit" class="btn btn-primary btn-sm toaster" value="Simpan">
						<a href="<?php echo site_url('');?>" class="btn btn-secondary btn-sm" onclick="return confirm('Yakin Cancel ?')">Batal</a>
						</div>
					</div> -->
				</form>
<!-- 				<div class="form-group col-md-2">
				<form class="form-inline" method="POST" action="<?php echo site_url('cambric/saldopacking/view_saldopacking/');?>">
					    	<div class="form-group">
					    	<label style="padding-left:7px"></label>&ensp;  
               				<input class="form-control form-control form-control-sm" type="date" name="tgl_packing" id="tgl_packing" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">&nbsp;
               				<button class="btn btn-info" type="submit" style="font-size: 13px;"name="action">Tampilkan Data</button>&ensp;
                    	</div>
				</form>
				</div> -->
			</div>
		</div>
	</div>
</div>
		<!-- ============================================== MODAL CARI DATA PP =========================================== -->
<!-- 			<div class="modal" id="modal-cpackpp">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <h5 class="modal-title">Cari PP</h5>
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            <span aria-hidden="true">&times;</span>
			          </button>
			        </div>
			        <div class="modal-body">
			        	<table id="cpackpp" class="table table-sm table-bordered table-responsive-md table-hover dataTable" role="grid">
			        		<thead>
			        			<tr>
				        			<th>No PP</th>
				        			<th>Tgl PP</th>
				        			<th>Nama Barang</th>
				        			<th>Kode WO</th>
				        			<th>Nama Jenis</th>
				        			<th>Nama Group</th>
				        			<th>Nama Proses</th>
			        			</tr>
			        		</thead>	 
			        		<tbody>
			        		<?php foreach ($get_packpp as $i) { ?>
			        			<tr id="pilih_packpp"
									kode_cdetail ="<?php echo $i->kode_dtl_packing?>"
									no_corderppcmb ="<?php echo $i->no_orderppcmb?>"
									tgl_cpp ="<?php echo $i->tgl_packing?>"
									kode_cbrg ="<?php echo $i->kode_brg?>"
									nama_cbrg ="<?php echo $i->nama_brg?>"
									kode_cwo ="<?php echo $i->kode_wo?>"
									kode_cjenis ="<?php echo $i->kode_jenis?>"
									nama_cjenis ="<?php echo $i->nama_jenis?>"
									kode_cgroup ="<?php echo $i->kode_group?>"
									nama_cgroup ="<?php echo $i->nama_group?>"
									kode_cproses ="<?php echo $i->kode_proses?>"
									nama_cproses ="<?php echo $i->kel?>"
			        			>
			        				<td><?php echo $i->no_orderppcmb?></td>
			        				<td><?php echo $i->tgl_packing?></td>
			        				<td><?php echo $i->nama_brg?></td>
			        				<td><?php echo $i->kode_wo?></td>
			        				<td><?php echo $i->nama_jenis?></td>		
			        				<td><?php echo $i->nama_group?></td>
			        				<td><?php echo $i->kel?></td>
			        			</tr>
				        	<?php } ?>
			        		</tbody>
			        	</table>
			        </div>
			        <div class="modal-footer justify-content-between" style="font-size: 11pt;">
			          <b><i>* Pilih PP dengan cara klik pada kolom data</i></b>
			        </div>
			      </div>
			    </div>
			 </div> -->
		<!-- ==================================================================================================================== -->
		<!--  /.modal  -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <script type="text/javascript">
$(document).ready(function(){
				$(function () {
				$("#cpackpp").DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});
		// get datatabel BARANG 
		$(document).on('click', '#pilih_packpp', function (e) {
			document.getElementById("id").value 			= $(this).attr('kode_cdetail');
			document.getElementById("no_pp").value 			= $(this).attr('no_corderppcmb');
			document.getElementById("kd_brg").value 		= $(this).attr('kode_cbrg');
			document.getElementById("nm_brg").value 		= $(this).attr('nama_cbrg');
			document.getElementById("kd_wo").value 			= $(this).attr('kode_cwo');
			$('#modal-cpackpp').modal('hide');
			$('.close').click();
			// $('.modal-backdrop').remove();				
			// $(document.body).removeClass('modal-open');
		});		
});		 
</script> -->