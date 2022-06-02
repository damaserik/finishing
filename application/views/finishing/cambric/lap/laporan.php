<br><br><br>
<div class="container col-md-9">
	<div class="card card-outline card-dark">

		<div class="card bg-light">
		  <div class="card-body">		
	        	<form method="POST" action="<?php echo site_url('cambric/campacking/simpan_packing/')?>">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Mutasi Cambric Harian</b></label>
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
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Rekap</button>
				    </div>
					<div class="form-group col-md-1">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Pertanggal</button>
				    </div>&ensp;&ensp;					
				    <div class="form-group col-md-1">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Perproses</button>
				    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1" align="left" style="margin-top: 8px;">
					    <label>Group</label>
				    </div>
				    <div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--PILIH--</option>
							<option value="1">KM</option>
							<option value="2">WO</option>
							<option value="3">REP</option>
			 			</select>
					    </div>
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>Kode</label>
				    </div>
				    <div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--PILIH--</option>
							<option value="1">KM</option>
							<option value="2">WO</option>
							<option value="3">REP</option>
			 			</select>
					    </div>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Mutasi Cambric Bulanan</b></label>
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
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Packing</button>
				    </div>
				    <div class="form-group col-md-1">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Folding</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Produksi Finishing Pertanggal</b></label>
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
					<div class="form-group col-md-2" align="right" style="margin-top: 8px;">
					    <label>Kode Proses</label>
				    </div>
				    <div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--PILIH--</option>
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
				<div class="form-row">					
					<div class="form-group col-md-1">
					    
				    </div>&ensp;
				    <div>
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Folding Detail</button>
				    </div>&nbsp;&nbsp;
					<div>
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Folding Rekap</button>
				    </div>&nbsp;	
				    <div class="form-group col-md-2">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Folding Proses</button>
				    </div>
				</div>
				<div class="form-row">					
					<div class="form-group col-md-1">
					    
				    </div>&ensp;
					<div>
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Packing Detail</button>
				    </div>&nbsp;&nbsp;
					<div >
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Packing Rekap</button>
				    </div>&nbsp;		
				    <div class="form-group col-md-2" align="left">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Rekap Pertanggal</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Pengeluaran Cambric</b></label>
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
				    <div class="form-group col-md-2" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Detail</button>
				    </div>
				    <div class="form-group col-md-2">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Pergroup</button>
				    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1" align="left" style="margin-top: 8px;">
					    <label>Group</label>
				    </div>
				    <div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--PILIH--</option>
							<option value="1">KM</option>
							<option value="2">WO</option>
							<option value="3">REP</option>
			 			</select>
					    </div>
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>Kode</label>
				    </div>
				    <div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--PILIH--</option>
							<option value="1">KM</option>
							<option value="2">WO</option>
							<option value="3">REP</option>
			 			</select>
					    </div>
				    </div>
				    <div class="form-group col-md-2" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Std Potong</button>
				    </div>
				    <div class="form-group col-md-2">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Std Pot Rekap</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
				<div class="form-row">
					<div>
						<label><b>&nbsp;Produksi Fold/Packing Mutasi</b></label>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-1" align="left" style="margin-top: 8px;">
					    <label>Bulan</label>
				    </div>
				    <div class="form-group col-md-1">
					    <input class="form-control form-control form-control-sm" type="number" name="tgl_saldo" required="" autocomplete="off" ">
				    </div>
				    <div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>Tahun</label>
				    </div>
				    <div class="form-group col-md-1">
					    <input class="form-control form-control form-control-sm" type="number" name="tgl_saldo" required="" autocomplete="off" ">
				    </div>
					<div class="form-group col-md-1" align="right" style="margin-top: 8px;">
					    <label>Group</label>
				    </div>
				    <div class="form-group col-md-2">									
						<div class="form-group" align="left" >
					    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
							<option selected value="2">--PILIH--</option>
							<option value="1">KM</option>
							<option value="2">WO</option>
							<option value="3">REP</option>
			 			</select>
					    </div>
				    </div>
				    <div class="form-group col-md-2" align="right">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Folding Per NO PP</button>
				    </div>
				    <div class="form-group col-md-2">
					    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-cpackpp">Packing Per NO PP</button>
				    </div>
				</div>
				<hr style="border: 1px solid green;">
			</div>
				</form>
			</div>
		</div>
	</div>
</div>
 