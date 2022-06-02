<br><br><br>
<div class="container">
	<div class="card card-outline card-dark">
		<div class="card-header">
		<h3>Form Input Barang</h3>
		</div>
	<div class="card bg-light">
	  <div class="card-body">		
        	<form method="POST" action="<?php echo site_url('master/barang/simpan_barang/')?>">
			<div class="form-row">
			    <div class="form-group col-md-2" hidden="">
				    <label>Kode Barang</label>
				    <input type="text" class="form-control form-control-sm" name="kode_brg" value="<?php echo $kode ?>" autocomplete="off">
			    </div>
			    <div class="form-group col-md-3">
				    <label>Nama Barang</label>
				    <input type="text" class="form-control form-control-sm" name="nama_brg" autofocus autocomplete="off">
			    </div>
			    <div class="form-group col-md-3">
				    <label>Jenis</label>
					<select class="form-control form-control-sm" name="kode_jenis" onchange="getText(this)">
						<option selected>-- Pilih Jenis --</option>
						<option></option>
						<?php foreach ($get_jenis->result_array() as $i) { ?>
							<option value="<?php echo $i['kode_jenis'];?>"><?php echo $i['kode_jenis'];?> - <?php echo $i['nama_jenis'];?></option>
						<?php } ?>
					</select>
			    </div>
			    <div class="form-group col-md-3">
				    <label>Group</label>					
				    <select class="form-control form-control-sm" name="kode_group" onchange="getText(this)">
						<option selected>-- Pilih Group --</option>
						<option></option>
						<?php foreach ($get_group->result_array() as $i) { ?>
							<option value="<?php echo $i['kode_group'];?>"><?php echo $i['kode_group'];?> - <?php echo $i['nama_group'];?></option>
						<?php } ?>
					</select>
			    </div>
			    <div class="form-group col-md-3">
				    <label>Proses</label>					
				    <select class="form-control form-control-sm" name="kode_proses" onchange="getText(this)">
						<option selected>-- Pilih Proses --</option>
						<option></option>
						<?php foreach ($get_proses->result_array() as $i) { ?>
							<option value="<?php echo $i['kode_proses'];?>"><?php echo $i['kode_proses'];?> - <?php echo $i['kel'];?></option>
						<?php } ?>
					</select>
			    </div>
			</div>
			<div class="form-row">				
				<div class="form-group col-md-2">
			    </div>
				<div class="form-group col-md-2">
				    <label>AwalGryTH</label>
				    <input type="text" class="form-control form-control-sm" name="awalgryth" value="0" autofocus autocomplete="off">
			    </div>
				<div class="form-group col-md-2">
				    <label>AwalGryBL</label>
				    <input type="text" class="form-control form-control-sm" name="awalgrybl" value="0" autofocus autocomplete="off">
			    </div>
				<div class="form-group col-md-2">
				    <label>AwalCmbTH</label>
				    <input type="text" class="form-control form-control-sm" name="awalcmbth" value="0" autofocus autocomplete="off">
			    </div>
				<div class="form-group col-md-2">
				    <label>AwalCmbBL</label>
				    <input type="text" class="form-control form-control-sm" name="awalcmbbl" value="0" autofocus autocomplete="off">
			    </div>

			</div>
			<br>
			  <button type="submit" class="btn btn-primary">Simpan</button>
			  <a href="<?php echo site_url('master/barang');?>" class="btn btn-secondary" onclick="return confirm('Yakin Cancel ?')">Cancel</a>
			</form>
		</div>
	</div>
</div>
</div>
<br>