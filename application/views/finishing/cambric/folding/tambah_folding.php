<br><br><br>
<div class="container col-md-8">
	<div class="card card-outline card-dark">
		<div class="card-header">
		<h3>Form Input Folding</h3>
		</div>
		<div class="card bg-light">
		  <div class="card-body">		
	        	<form method="POST" action="<?php echo site_url('cambric/camfolding/simpan_folding/')?>">
				<div class="form-row">
					    <div class="form-group col-md-2" hidden="">
						    <label>Kode Detail</label>
						    <input type="text" class="form-control form-control-sm" name="kode_detail" autocomplete="off">
					    </div>
					    <div class="form-group col-md-3">
						    <label>NO Order PP</label>
						    <div class='input-group-prepend'>
		                		<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cgreypp">Cari</button>
		                		<input type="text" class="form-control form-control-sm" name="no_orderppcmb" id="no_pp" readonly="">
		                	</div>
					    </div>
					    <div class="form-group col-md-3">
						    <label>Tanggal</label>
						    <input class="form-control form-control form-control-sm" type="date" name="tgl_folding" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
					    </div>		
					    <div class="form-group col-md-2" hidden="">
						    <label>Kode Folding</label>
						    <input type="text" class="form-control form-control-sm" name="kode_folding_trans" value="1" autofocus autocomplete="off">
					    </div>						
					    <div class="form-group col-md-3">
						    <label>Nama Barang</label>
						    <input type="text" class="form-control form-control-sm" name="nama_brg" id="nm_brg" readonly="">
						    <input type="text" class="form-control form-control-sm" name="kode_brg" id="kd_brg" hidden="">
					    </div>
						<div class="form-group col-md-3">
						    <label>Kode WO</label>
						    <input type="text" class="form-control form-control-sm" name="kode_wo" id="kd_wo" readonly="">
					    </div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
						    <label>Nomor</label>
						    <input type="number" class="form-control form-control-sm" name="no_gulfold" step=any min="0">
					    </div>
						<div class="form-group col-md-2">
						    <label>Gulung</label>
						    <input type="number" class="form-control form-control-sm" name="gulung_folding" step=any min="0">
					    </div>
						<div class="form-group col-md-2">
						    <label>Cutting</label>
						    <input type="number" class="form-control form-control-sm" name="cutting" step=any min="0" id="cutting">
					    </div>
						<div class="form-group col-md-2">
						    <label>Sisa</label>
						    <input type="number" class="form-control form-control-sm" name="sisa" step=any min="0" id="sisa">
					    </div>				
					    <div class="form-group col-md-2">
						    <label>Jumlah</label>
						    <input type="number" class="form-control form-control-sm" name="folding" step=any min="0" id="folding" >
					    </div>
					</div>
					<hr style="border: 1px solid green;">
					<br>
					<div class="row">
						<div class="form-group col-md-5">
							<div class="form-group float-left">
							<input type="submit" class="btn btn-primary btn-sm toaster" value="Simpan">
							<a href="<?php echo site_url('');?>" class="btn btn-secondary btn-sm" onclick="return confirm('Yakin Cancel ?')">Batal</a>
							</div>
						</div>
					</form>
					<div class="form-group col-md-2">
					<form class="form-inline" method="POST" action="<?php echo site_url('cambric/camfolding/view_foldingtgl/');?>">
						<div class="form-group">
					    	<label style="padding-left:87px;">Pilih Tanggal</label>&ensp;  
               				<input class="form-control form-control form-control-sm" type="date" name="tgl_folding" id="tgl_folding" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">&nbsp;
               				<button class="btn btn-info" type="submit" style="font-size: 13px;"name="action">Tampilkan Data</button>&ensp;
                    	</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- ============================================== MODAL CARI DATA PP =========================================== -->
			<div class="modal" id="modal-cgreypp">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <h5 class="modal-title">Cari PP</h5>
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            <span aria-hidden="true">&times;</span>
			          </button>
			        </div>
			        <div class="modal-body">
			        	<table id="cgreypp" class="table table-sm table-bordered table-responsive-md table-hover dataTable" role="grid">
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
			        		<?php foreach ($get_greypp as $i) { ?>
			        			<tr id="pilih_greypp"
									no_corderpp ="<?php echo $i->no_orderpp?>"
									tgl_cpp ="<?php echo $i->tgl_dtl_order?>"
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
			        				<td><?php echo $i->no_orderpp?></td>
			        				<td><?php echo $i->tgl_dtl_order?></td>
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
				$("#cgreypp").DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});
		// get datatabel BARANG 
		$(document).on('click', '#pilih_greypp', function (e) {
			document.getElementById("no_pp").value 			= $(this).attr('no_corderpp');
			document.getElementById("kd_brg").value 		= $(this).attr('kode_cbrg');
			document.getElementById("nm_brg").value 		= $(this).attr('nama_cbrg');
			document.getElementById("kd_wo").value 			= $(this).attr('kode_cwo');
			$('#modal-cgreypp').modal('hide');
			$('.close').click();
			// $('.modal-backdrop').remove();				
			// $(document.body).removeClass('modal-open');
		});		
		// PERHITUNGAN JUMLAH FOLDING
		 $("#sisa").keyup(function(){ 
		 var cutting = parseFloat($("#cutting").val());
		 var sisa = parseFloat($("#sisa").val());
		 var folding = parseFloat(cutting + sisa);
		 $("#folding").val(folding); 
		 }); 
});		 
</script>