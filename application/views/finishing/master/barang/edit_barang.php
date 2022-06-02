<br><br><br>
<div class="content">
		<div class="container-fluid">
		<div class="row justify-content-md-center" >
			<div class="col-md-10" >
				<div class="card card-outline card-dark">
					<div class="card-header">
						<h3>Form Edit Barang</h3>
					</div>
					  <div class="card-body">
							<?php foreach ($ubah_data as $key => $row): ?>			
				        	<form method="POST" action="<?php echo site_url('master/barang/barang_edit/'.$row->kode_brg)?>">
							<div class="form-row">
								<div class="col-md-3" hidden="">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Kode Barang</label>
								    	<input type="text" class="form-control" name="kode_brg" autofocus style="font-size: 11pt;" autocomplete="off" value="<?php echo $row->kode_brg?>">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Nama Barang</label>
								    	<input type="text" class="form-control" name="nama_brg" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->nama_brg?>">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Jenis</label>
								    	<select class="form-control" name="kode_jenis" required="">
											<option selected="" value="<?php echo $row->kode_jenis?>"><?php echo $row->nama_jenis?></option>
											<option></option>
 											<?php foreach ($get_jenis->result_array() as $i) { ?>
												<option value="<?php echo $i['kode_jenis'];?>"><?php echo $i['kode_jenis'];?> - <?php echo $i['nama_jenis'];?></option>
											<?php } ?> 
										</select>
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label style="font-size: 11pt;">Group</label>
								    	<select class="form-control" name="kode_group" required="">
											<option selected="" value="<?php echo $row->kode_group?>"><?php echo $row->nama_group?></option>
											<option></option>
 											<?php foreach ($get_group->result_array() as $i) { ?>
												<option value="<?php echo $i['kode_group'];?>"><?php echo $i['kode_group'];?> - <?php echo $i['nama_group'];?></option>
											<?php } ?> 
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Proses</label>
								    	<select class="form-control" name="kode_proses" required="">
											<option selected="" value="<?php echo $row->kode_proses?>"><?php echo $row->kel?></option>
											<option></option>
 											<?php foreach ($get_proses->result_array() as $i) { ?>
												<option value="<?php echo $i['kode_proses'];?>"><?php echo $i['kode_proses'];?> - <?php echo $i['kel'];?></option>
											<?php } ?> 
										</select>
								    </div>
							    </div>
							</div>
							<div class="form-row">
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalGryTH</label>
								    	<input type="text" class="form-control form-control-sm" name="awalgryth" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalgryth?>">
							    	</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalGryBL</label>
								    	<input type="text" class="form-control form-control-sm" name="awalgrybl" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalgrybl?>">
							   		</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalCmbTH</label>
								    	<input type="text" class="form-control form-control-sm" name="awalcmbth" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalcmbth?>">
							   		</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalCmbBL</label>
								    	<input type="text" class="form-control form-control-sm" name="awalcmbbl" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalcmbbl?>">
							   		</div>
							    </div>
							</div>
							<br>
							  <button type="submit" class="btn btn-primary btn-sm toaster">Simpan</button>
							  <a href="<?php echo site_url('master/barang');?>" class="btn btn-secondary btn-sm toaster" onclick="return confirm('Yakin Cancel ?')">Cancel</a>
							</form>
							<?php endforeach ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>