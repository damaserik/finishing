<br><br><br>
<div class="content">
		<div class="container-fluid">
		<div class="row justify-content-md-center" >
			<div class="col-md-10" >
				<div class="card card-outline card-dark">
					<div class="card-header">
						<h3>Form Saldo Awal Cambric Packing</h3>
					</div>
					  <div class="card-body">
							<?php foreach ($ubah_data as $key => $row): ?>			
				        	<form method="POST" action="<?php echo site_url('master/saldo/cambric_packing_ubah/'.$row->kode_brg)?>">
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
								    	<label style="font-size: 11pt;">AwalCmbTH</label>
								    	<input type="text" class="form-control form-control-sm" name="awalcmbth" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalcmbth?>">
							    	</div>
							    </div>
							    <div class="col-md-2">
									<div class="form-group">
								    	<label style="font-size: 11pt;">AwalCmbBL</label>
								    	<input type="text" class="form-control form-control-sm" name="awalcmbbl" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->awalcmbbl?>">
							   		</div>
							    </div>
							</div>
							<div class="form-row">
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C01</label>
								    	<input type="text" class="form-control form-control-sm" name="c01" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c01?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C02</label>
								    	<input type="text" class="form-control form-control-sm" name="c02" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c02?>">
							   		</div>
							    </div>
							   	<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C03</label>
								    	<input type="text" class="form-control form-control-sm" name="c03" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c03?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C04</label>
								    	<input type="text" class="form-control form-control-sm" name="c04" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c04?>">
							   		</div>
							    </div>							    
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C05</label>
								    	<input type="text" class="form-control form-control-sm" name="c05" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c05?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C06</label>
								    	<input type="text" class="form-control form-control-sm" name="c06" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c06?>">
							   		</div>
							   	</div>
								<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C07</label>
								    	<input type="text" class="form-control form-control-sm" name="c07" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c07?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C08</label>
								    	<input type="text" class="form-control form-control-sm" name="c08" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c08?>">
							   		</div>
							    </div>
							   	<div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C09</label>
								    	<input type="text" class="form-control form-control-sm" name="c09" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c09?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C10</label>
								    	<input type="text" class="form-control form-control-sm" name="c10" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c10?>">
							   		</div>
							    </div>							    
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C11</label>
								    	<input type="text" class="form-control form-control-sm" name="c11" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c11?>">
							   		</div>
							    </div>
							    <div class="col-md-1">
									<div class="form-group">
								    	<label style="font-size: 11pt;">C12</label>
								    	<input type="text" class="form-control form-control-sm" name="c12" style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->c12?>">
							   		</div>
							    </div>
							</div>
							<br>
							  <button type="submit" class="btn btn-primary btn-sm toaster">Simpan</button>
							  <a href="<?php echo site_url('master/saldo/view_cambric_packing');?>" class="btn btn-secondary btn-sm toaster" onclick="return confirm('Yakin Cancel ?')">Cancel</a>
							</form>
							<?php endforeach ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>