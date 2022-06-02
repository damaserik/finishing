<br><br><br>
<div class="content">
		<div class="container-fluid">
		<div class="row justify-content-md-center" >
			<div class="col-md-10" >
				<div class="card card-outline card-dark">
					<div class="card-header">
						<h3>Form Edit Detail KM</h3>
					</div>
					  <div class="card-body">
							<?php foreach ($ubah_data as $key => $row): ?>			
				        	<form method="POST" action="<?php echo site_url('grey/greykm/greykm_edit/'.$row->kode_detail)?>">
							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group" hidden="">
								    	<label style="font-size: 11pt;">Kode Detail</label>
								    	<input type="text" class="form-control" name="kode_detail" autofocus style="font-size: 11pt;" autocomplete="off" value="<?php echo $row->kode_detail?>" >
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group" hidden="">
								    	<label style="font-size: 11pt;">Kode Order Grey</label>
								    	<input type="text" class="form-control" name="kode_ordergry" autofocus style="font-size: 11pt;" autocomplete="off" value="<?php echo $row->kode_ordergry?>">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group" hidden="">
								    	<label style="font-size: 11pt;">No Order Grey</label>
								    	<input type="text" class="form-control" name="no_ordergry" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->no_ordergry?>">
								    </div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">No Order PP</label>
								    	<input type="text" class="form-control" name="no_orderpp" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->no_orderpp?>">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Tgl Detail Order</label>
								    	<input type="date" class="form-control" name="tgl_dtl_order" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->tgl_dtl_order?>">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Kain Luar</label>
								    	<input type="text" class="form-control" name="kain_luar" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->kain_luar?>">
								    </div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group">
										<label style="font-size: 11pt;">Barang</label>
										<div class="input-group-prepend">
							            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#emodal-cbarang">Cari</button>
							            <input class="form-control form-control-sm" type="text" name="nama_brg" value="<?php echo $row->nama_brg?>"readonly="" id="nm_brg">
						                </div>
										<input class="form-control form-control-sm" type="text" name="kode_brg" value="<?php echo $row->kode_brg?>"required="" id="kd_brg" hidden="">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label style="font-size: 11pt;">Jenis</label>
									    <input type="text" class="form-control form-control-sm" name="nama_jenis" value="<?php echo $row->nama_jenis?>" id="nm_jenis" readonly="">
									    <input type="text" class="form-control form-control-sm" name="kode_jenis" value="<?php echo $row->kode_jenis?>" id="kd_jenis" hidden="">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label style="font-size: 11pt;">Group</label>
									    <input type="text" class="form-control form-control-sm" name="nama_group" value="<?php echo $row->nama_group?>"id="nm_group" readonly="">
									    <input type="text" class="form-control form-control-sm" name="kode_group" value="<?php echo $row->kode_group?>" id="kd_group" hidden="">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label style="font-size: 11pt;">Proses</label>
									    <input type="text" class="form-control form-control-sm" name="kel" value="<?php echo $row->kel?>" id="nm_proses" readonly="">
									    <input type="text" class="form-control form-control-sm" name="kode_proses" value="<?php echo $row->kode_proses?>"id="kd_proses" hidden="">
									</div>
								</div>
							</div>
							<div class="form-row">
							    <div class="col-md-3">
									<div class="form-group">
										<label style="font-size: 11pt;">Gulung</label>
									    <input type="number" class="form-control form-control-sm" name="gulung" value="<?php echo $row->gulung?>" step=any min="0" required="">
							    	</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Meter</label>
								    	<input type="number" class="form-control form-control-sm" name="meter" value="<?php echo $row->meter?>" step=any id="amet" min="0" required="">
							   		</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Yard</label>
								    	<input type="number" class="form-control form-control-sm" name="yard" value="<?php echo $row->yard?>" step=any id="ayad" min="0" required="" readonly="">
							   		</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Terima</label>
								    	<input type="number" class="form-control form-control-sm" name="terima" value="<?php echo $row->terima?>" step=any min="0" required="">
							   		</div>
							    </div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group float-right">
									<button type="submit" class="btn btn-primary btn-sm toaster">Simpan</button>
							  		<a href="<?php echo site_url('grey/greykm/view_dtlgreykm/'.$row->kode_ordergry)?>" class="btn btn-secondary btn-sm toaster" onclick="return confirm('Yakin Cancel ?')">Batal</a>
									</div>
								</div>
							</div>
							</form>
							<?php endforeach ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

		<!-- ============================================== MODAL CARI DATA BARANG =========================================== -->
			<div class="modal" id="emodal-cbarang">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div class="modal-header">
			          <h5 class="modal-title">Cari Data Barang</h5>
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            <span aria-hidden="true">&times;</span>
			          </button>
			        </div>
			        <div class="modal-body">
			        	<table id="ecaribarang" class="table table-sm table-bordered table-responsive-md table-hover dataTable" role="grid">
			        		<thead>
			        			<tr>
				        			<th>Nama Barang</th>
				        			<th>Nama Jenis</th>
				        			<th>Nama Group</th>
				        			<th>Nama Proses</th>
			        			</tr>
			        		</thead>	 
			        		<tbody>
			        		<?php foreach ($get_barang as $i) { ?>
			        			<tr id="pilih_barang"
									kode_cbrg ="<?php echo $i->kode_brg?>"
									nama_cbrg ="<?php echo $i->nama_brg?>"
									kode_cjenis ="<?php echo $i->kode_jenis?>"
									nama_cjenis ="<?php echo $i->nama_jenis?>"
									kode_cgroup ="<?php echo $i->kode_group?>"
									nama_cgroup ="<?php echo $i->nama_group?>"
									kode_cproses ="<?php echo $i->kode_proses?>"
									nama_cproses ="<?php echo $i->kel?>"
			        			>
			        				<td><?php echo $i->nama_brg?></td>
			        				<td><?php echo $i->nama_jenis?></td>		
			        				<td><?php echo $i->nama_group?></td>
			        				<td><?php echo $i->kel?></td>
			        			</tr>
				        	<?php } ?>
			        		</tbody>
			        	</table>
			        </div>
			        <div class="modal-footer justify-content-between" style="font-size: 11pt;">
			          <b><i>* Pilih Barang dengan cara klik pada kolom data</i></b>
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
				$("#ecaribarang").DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});
		// get datatabel BARANG 
		$(document).on('click', '#pilih_barang', function (e) {
			document.getElementById("kd_brg").value 		= $(this).attr('kode_cbrg');
			document.getElementById("nm_brg").value 		= $(this).attr('nama_cbrg');
			document.getElementById("kd_jenis").value 		= $(this).attr('kode_cjenis');
			document.getElementById("nm_jenis").value 		= $(this).attr('nama_cjenis');
			document.getElementById("kd_group").value 		= $(this).attr('kode_cgroup');
			document.getElementById("nm_group").value 		= $(this).attr('nama_cgroup');
			document.getElementById("kd_proses").value 		= $(this).attr('kode_cproses');
			document.getElementById("nm_proses").value 		= $(this).attr('nama_cproses');
			$('#emodal-cbarang').modal('hide');
			$('.close').click();
			// $('.modal-backdrop').remove();				
			// $(document.body).removeClass('modal-open');
		});		
		// PERHITUNGAN METER KE YARD
		// Set Id dangan Nama Baru
		 document.getElementById("amet").id = "amet"; 
		 document.getElementById("ayad").id = "ayad"; 
		 // Mengisis data id Dengan id baru
		 $("#amet").keyup(function(){
		 	ss = $(this).val();
		 	dd = ss * 1.0936;
		 	hasil = dd.toFixed(2);
			a = Math.floor(hasil);
			ff = hasil-a;
			d = ff.toFixed(2);		
			if(d < 0.25){
				fd = '00';
				fd1 = a+'.'+fd;
			}else if(d >= 0.25 && d < 0.50)
			{
				fd = 0.25;
				fd1 = a+fd;
			}else if(d >= 0.50 && d < 0.75)
			{
				fd = 0.50;
				fd1 = a+fd;
			}else if(d >= 0.75 && d <= 0.99)
			{
				fd = 0.75;
				fd1 = a+fd;
			}
		 	document.getElementById("ayad").value = fd1;
		 });		 
});		 
</script>