<br><br><br>
<div class="content">
		<div class="container-fluid">
		<div class="row justify-content-md-center" >
			<div class="col-md-10" >
				<div class="card card-outline card-dark">
					<div class="card-header">
						<h3>Form Saldo Awal Cambric Folding</h3>
					</div>
					  <div class="card-body">
							<?php foreach ($ubah_data as $key => $row): ?>			
				        	<form method="POST" action="<?php echo site_url('master/saldo/cambric_folding_ubah/'.$row->kode_brg)?>">
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
								    	<label style="font-size: 11pt;">AwalFldTH</label>
								    	<input type="text" class="form-control form-control-sm" name="awalfldth" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalfldth?>">
							    	</div>
							    </div>
							    <div class="col-md-2">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalFldBL</label>
								    	<input type="text" class="form-control form-control-sm" name="awalfldbl" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalfldbl?>">
							   		</div>
							    </div>
							</div>
							<div class="form-row">
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F01</label>
								    	<input type="text" class="form-control form-control-sm" name="f01" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f01?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F02</label>
								    	<input type="text" class="form-control form-control-sm" name="f02" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f02?>">
							   		</div>
							    </div>
							   	<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F03</label>
								    	<input type="text" class="form-control form-control-sm" name="f03" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f03?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F04</label>
								    	<input type="text" class="form-control form-control-sm" name="f04" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f04?>">
							   		</div>
							    </div>							    
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F05</label>
								    	<input type="text" class="form-control form-control-sm" name="f05" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f05?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F06</label>
								    	<input type="text" class="form-control form-control-sm" name="f06" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f06?>">
							   		</div>
							   	</div>
								<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F07</label>
								    	<input type="text" class="form-control form-control-sm" name="f07" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f07?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F08</label>
								    	<input type="text" class="form-control form-control-sm" name="f08" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f08?>">
							   		</div>
							    </div>
							   	<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F09</label>
								    	<input type="text" class="form-control form-control-sm" name="f09" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f09?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F10</label>
								    	<input type="text" class="form-control form-control-sm" name="f10" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f10?>">
							   		</div>
							    </div>							    
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F11</label>
								    	<input type="text" class="form-control form-control-sm" name="f11" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f11?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">F12</label>
								    	<input type="text" class="form-control form-control-sm" name="f12" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->f12?>">
							   		</div>
							    </div>
							</div>
							<br>
							  <button type="submit" class="btn btn-primary btn-sm toaster">Simpan</button>
							  <a href="<?php echo site_url('master/saldo/view_cambric_folding');?>" class="btn btn-secondary btn-sm toaster" onclick="return confirm('Yakin Cancel ?')">Cancel</a>
							</form>
							<?php endforeach ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>