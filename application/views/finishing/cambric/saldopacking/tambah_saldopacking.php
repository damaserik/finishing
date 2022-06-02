<br><br><br>
<div class="container col-md-9">
	<div class="card card-outline card-dark">
		<div class="card-header">
		<h3>Form Input Saldo Awal Packing</h3>
		</div>
		<div class="card bg-light">
		  <div class="card-body">		
	        	<form method="POST" action="<?php echo site_url('cambric/campacking/simpan_packing/')?>">
				<div class="form-row">
				    <div class="form-group col-md-2" hidden="">
					    <label>Kode Detail</label>
					    <input type="text" class="form-control form-control-sm" name="kode_detail" id="id" autocomplete="off">
				    </div>
				    <div class="form-group col-md-3">
					    <label>NO Order PP</label>
					    <div class='input-group-prepend'>
	                		<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Cari</button>
	                		<input type="text" class="form-control form-control-sm" name="no_orderppcmb" id="no_pp" readonly="">
	                	</div>
				    </div>
				    <div class="form-group col-md-2" hidden="">
					    <label>Kode Saldo Trans</label>
					    <input type="text" class="form-control form-control-sm" name="kode_saldo_trans" value="5" autofocus autocomplete="off">
				    </div>					
				    <div class="form-group col-md-3">
					    <label>Nama Barang</label>
					    <input type="text" class="form-control form-control-sm" name="nama_brg" id="nm_brg" readonly="">
					    <input type="text" class="form-control form-control-sm" name="kode_brg" id="kd_brg" hidden="">
				    </div>
					<div class="form-group col-md-2">
					    <label>Kode WO</label>
					    <input type="text" class="form-control form-control-sm" name="kode_wo" id="kd_wo" readonly="">
				    </div>
					<div class="form-group col-md-2">
					    <label>Saldo Awal</label>
					    <input type="number" class="form-control form-control-sm" name="saldo_awal" step=any min="0">
				    </div>				    
				    <div class="form-group col-md-2">
					    <label>Tanggal</label>
					    <input class="form-control form-control form-control-sm" type="date" name="tgl_saldo" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
				    </div>	
				</div>
				<hr style="border: 1px solid green;">
				<br>
				<div class="row">
					<div class="form-group col-md-10">
						<div class="form-group float-left">
						<input type="submit" class="btn btn-primary btn-sm toaster" value="Simpan">
						<a href="<?php echo site_url('');?>" class="btn btn-secondary btn-sm" onclick="return confirm('Yakin Cancel ?')">Batal</a>
						</div>
					</div>
				</form>
				<div class="form-group col-md-2">
				<form class="form-inline" method="POST" action="<?php echo site_url('cambric/saldopacking/view_saldopacking/');?>">
					    	<div class="form-group">
					    	<label style="padding-left:7px"></label>&ensp;  
               				<!-- <input class="form-control form-control form-control-sm" type="date" name="tgl_packing" id="tgl_packing" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">&nbsp; -->
               				<button class="btn btn-info" type="submit" style="font-size: 13px;"name="action">Tampilkan Data</button>&ensp;
                    	</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- ============================================== MODAL CARI DATA PP =========================================== -->
			<div class="modal" id="modal-cpackpp">
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
			 </div>
		<!-- ==================================================================================================================== -->
		<!--  /.modal  -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
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
</script>