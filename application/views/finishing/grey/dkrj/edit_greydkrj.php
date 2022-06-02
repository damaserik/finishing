<br><br><br>
<div class="content">
		<div class="container-fluid">
		<div class="row justify-content-md-center" >
			<div class="col-md-10" >
				<div class="card card-outline card-dark">
					<div class="card-header">
						<h3>Form Input Dikerjakan/Diretur</h3>
					</div>
					  <div class="card-body">
							<?php foreach ($ubah_data as $key => $row): ?>			
				        	<form method="POST" action="<?php echo site_url('grey/greydkrj/greydkrj_edit/'.$row->kode_detail)?>">
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
								    	<input type="text" class="form-control" name="no_orderpp" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->no_orderpp?>" readonly=""> 
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Tgl Detail Order</label>
								    	<input type="date" class="form-control" name="tgl_dtl_order" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->tgl_dtl_order?>" readonly="">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Kain Luar</label>
								    	<input type="text" class="form-control" name="kain_luar" autofocus style="font-size: 11pt;" autocomplete="off" required="" value="<?php echo $row->kain_luar?>" readonly="">
								    </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									    <label style="font-size: 11pt;">Kode WO</label>
										<input class="form-control form-control-sm" list="kdwo" type="text" name="kode_wo" value="<?php echo $row->kode_wo?>"placeholder="--WO--" autocomplete="off" required="" readonly="">
					                    <datalist id="kdwo">
					                     <?php foreach ($get_wo->result_array() as $i ) {?>"
					                      <option value="<?php echo $i["kode_wo"];?>"><?php echo $i["kode_wo"];?> - <?php echo $i["nama_wo"];?></option>"
					                      <?php } ?>
					                   </datalist>
					               </div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group">
										<label style="font-size: 11pt;">Barang</label>
										<div class="input-group-prepend">
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
							<div class="row">
								<div class="col-md-3"><p><i><b>Jumlah Penerimaan Grey</b></i></p></div>
								<div class="col-md-9">
									<hr style="border: 1px solid green;">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Terima</label>
								    	<input type="number" class="form-control form-control-sm" name="terima" value="<?php echo $row->terima?>" step=any min="0" required="" readonly="">
							   		</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
										<label style="font-size: 11pt;">Gulung</label>
									    <input type="number" class="form-control form-control-sm" name="gulung" value="<?php echo $row->gulung?>" step=any min="0" required="" readonly="">
							    	</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Meter</label>
								    	<input type="number" class="form-control form-control-sm" name="meter" value="<?php echo $row->meter?>" step=any id="amet" min="0" required="" readonly="">
							   		</div>
							    </div>
							    <div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Yard</label>
								    	<input type="number" class="form-control form-control-sm" name="yard" value="<?php echo $row->yard?>" step=any id="ayad" min="0" required="" readonly="">
							   		</div>
							    </div>
							</div>
							<div class="row">
								<div class="col-md-3"><p><i><b>Input Grey Dikerjakan/Diretur</b></i></p></div>
								<div class="col-md-9">
									<hr style="border: 1px solid green;">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group">
								    <label>Transaksi</label>
								    <select class="form-control form-control-sm" name="kode_proses_trans" required="">
										<option selected value="2">Proses/Dikerjakan</option>
										<option value="2">Proses/Dikerjakan</option>
										<option value="3">Return</option>
						 			</select>
								    </div>	
								</div>							   
								<div class="col-md-3">
									<div class="form-group">
										<label style="font-size: 11pt;">Gulung</label>
									    <input type="number" class="form-control form-control-sm" name="gulung_proses" value="<?php echo $row->gulung_proses?>" step=any required="">
							    	</div>
							    </div>
								<div class="col-md-3">
									<div class="form-group">
								    	<label style="font-size: 11pt;">Dikerjakan</label>
								    	<input type="number" class="form-control form-control-sm" name="yard_proses" value="<?php echo $row->yard_proses?>" step=any id="pros" required="">
							   		</div>
							    </div>
							             <div class="form-row">
                                          <div class="col-md-4" align="right" style="margin-top: 34px;">
                                            <div class="form-group">
                                              <input type="checkbox" name="cek2" id="cek2"><i><b> Direturn</b></i>
                                              <input type="text" class="form-control form-control-sm" name="kode_return_trans" value="3" required="" readonly="" hidden="">
                                            </div>  
                                          </div>   
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Gulung</label>
                                                <input type="number" class="form-control form-control-sm" name="gulung_return" id="gulung_return" value="<?php echo $row->gulung_return?>" step=any disabled>
                                              </div>
                                          </div>              
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Return/Yard</label>
                                                <input type="number" class="form-control form-control-sm cek2" name="return" value="<?php echo $row->return?>" step=any>
                                              </div>
                                          </div>
                                        </div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group float-right">
									<button type="submit" class="btn btn-primary btn-sm toaster">Simpan</button>
							  		<a href="<?php echo site_url('grey/greydkrj/view_greydkrj/')?>" class="btn btn-secondary btn-sm toaster" onclick="return confirm('Yakin Cancel ?')">Batal</a>
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
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
   $('#pros').on('keyup', function(){
      var input = $(this).val();
      $('#prev-yard').text(input);
   });
</script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
// $(function() {
//   enable_cb();
//   $("#cek2").click(enable_cb);
// });

// function enable_cb() {
//   if (this.checked) {
//     $("input.cek2").prop("disabled", false);
//   } else {
//     $("input.cek2").prop("disabled", true);
//   }
// }
$('body').on('change', '#cek2', function() {
  // checking if it is checked
  if (this.checked === true) {
    $('#gulung_return').attr("disabled", false);
  } else {
    $('#gulung_return').attr("disabled", true);
  }

})
</script>