<br><br><br>
<div class="content">
		<div class="container-fluid">
		<div class="row justify-content-md-center" >
			<div class="col-md-10" >
				<div class="card card-outline card-dark">
					<div class="card-header">
						<h3>Form Saldo Awal Grey</h3>
					</div>
					  <div class="card-body">
							<?php foreach ($ubah_data as $key => $row): ?>			
				        	<form method="POST" action="<?php echo site_url('master/saldo/awal_grey_ubah/'.$row->kode_brg)?>">
							<div class="form-row">
								<div class="col-md-3" hidden="">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Kode Barang</label>
								    	<input type="text" class="form-control form-control-sm" name="kode_brg" autofocus style="font-size: 11pt;" autocomplete="off" value="<?php echo $row->kode_brg?>">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Nama Barang</label>
								    	<input type="text" class="form-control form-control-sm" name="nama_brg" readonly="" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->nama_brg?>">
								    </div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label style="font-size: 11pt;">Group</label>
								    	<select class="form-control form-control-sm" name="kode_group" readonly="">
											<option selected="" value="<?php echo $row->kode_group?>"><?php echo $row->nama_group?></option>
											<option></option>
 											<?php foreach ($get_group->result_array() as $i) { ?>
												<option value="<?php echo $i['kode_group'];?>"><?php echo $i['kode_group'];?> - <?php echo $i['nama_group'];?></option>
											<?php } ?> 
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Jenis</label>
								    	<select class="form-control form-control-sm" name="kode_jenis" readonly="" >
											<option selected="" value="<?php echo $row->kode_jenis?>"><?php echo $row->nama_jenis?></option>
											<option></option>
 											<?php foreach ($get_jenis->result_array() as $i) { ?>
												<option value="<?php echo $i['kode_jenis'];?>"><?php echo $i['kode_jenis'];?> - <?php echo $i['nama_jenis'];?></option>
											<?php } ?> 
										</select>
								    </div>
								</div>
							    <div class="col-md-2">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalGryTH</label>
								    	<input type="text" class="form-control form-control-sm" name="awalgryth" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalgryth?>">
							    	</div>
							    </div>
							    <div class="col-md-2">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalGryBL</label>
								    	<input type="text" class="form-control form-control-sm" name="awalgrybl" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalgrybl?>">
							   		</div>
							    </div>
							</div>
							<div class="form-row">
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G01</label>
								    	<input type="text" class="form-control form-control-sm" name="g01" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g01?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G02</label>
								    	<input type="text" class="form-control form-control-sm" name="g02" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g02?>">
							   		</div>
							    </div>
							   	<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G03</label>
								    	<input type="text" class="form-control form-control-sm" name="g03" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g03?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G04</label>
								    	<input type="text" class="form-control form-control-sm" name="g04" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g04?>">
							   		</div>
							    </div>							    
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G05</label>
								    	<input type="text" class="form-control form-control-sm" name="g05" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g05?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G06</label>
								    	<input type="text" class="form-control form-control-sm" name="g06" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g06?>">
							   		</div>
							   	</div>
								<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G07</label>
								    	<input type="text" class="form-control form-control-sm" name="g07" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g07?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G08</label>
								    	<input type="text" class="form-control form-control-sm" name="g08" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g08?>">
							   		</div>
							    </div>
							   	<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G09</label>
								    	<input type="text" class="form-control form-control-sm" name="g09" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g09?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G10</label>
								    	<input type="text" class="form-control form-control-sm" name="g10" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g10?>">
							   		</div>
							    </div>							    
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G11</label>
								    	<input type="text" class="form-control form-control-sm" name="g11" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g11?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">G12</label>
								    	<input type="text" class="form-control form-control-sm" name="g12" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->g12?>">
							   		</div>
							    </div>
							</div>
							<br>
							  <button type="submit" class="btn btn-primary btn-sm toaster">Simpan</button>
							  <a href="<?php echo site_url('master/saldo/view_awal_grey');?>" class="btn btn-secondary btn-sm toaster" onclick="return confirm('Yakin Cancel ?')">Cancel</a>
							</form>
							<?php endforeach ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>