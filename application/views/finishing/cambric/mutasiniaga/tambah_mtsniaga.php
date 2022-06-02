<br><br><br>
<div class="container">
	<div class="card card-outline card-dark">
		<div class="card-header">
		<h3>Form Input Pengeluaran Cambric Ke Gudang/Niaga</h3>
		</div>
				<div class="card bg-light">
				  <div class="card-body">		
						<?php echo validation_errors();?>
						<?php echo form_open('cambric/mtsniaga/simpan_mtsniaga/');?>
						<div class="form-row">
							<div class="form-group col-md-2" hidden="">
							    <label>Kode Order Cambric</label>
							    <input type="text" class="form-control form-control-sm"  value="<?php echo $kode ?>" name="kode_ordercmb" autocomplete="off">
							</div>
							<div class="form-group col-md-3">
						    	<label>NO Nota</label>
		                		<input type="text" class="form-control form-control-sm" name="no_ordercmb" required="">
					 	    </div>
						    <div class="form-group col-md-2">
							    <label>Tanggal</label>
							    <input class="form-control form-control form-control-sm" type="date" name="tgl_order" autocomplete="off" value="<?php echo date('Y-m-d');?>" required="">
						    </div>
		    			    <div class="form-group col-md-3">
							    <label>Group</label>					
							    <select class="form-control form-control-sm" name="kode_group" required="">
									<option selected value="">-- Pilih --</option>
									<option value="G0002">WO</option>
									<option value="G0001">KM</option>
									<option value="G0003">Rep</option>
								</select>
						    </div>	
						</div>
						<div class="row">
							<div class="col-md-3"><p><i><b>Detail PP</b></i></p></div>
							<div class="col-md-9">
								<hr style="border: 1px solid green;">
							</div>
						</div>
						<div id="insert-detailpp"></div>
						<br>						
						<div class="row">
							<div class="col-md-11">
								<div class="form-group">
									<input type="button" class="btn btn-dark btn-sm" value="Tambah Form" id="tambah-detailpp">
									<input type="button" class="btn btn-warning btn-sm" value="Reset Form" id="reset-detailpp">
								</div>
							</div>
						</div> 
						<b><i style="font-size: 14px;">* Silahkan klik (Tambah Form) untuk Menambahkan PP</i></b>
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
							<form class="form-inline" method="POST" action="<?php echo site_url('cambric/mtsniaga/view_mtsniaga/');?>">
							    <div class="form-group">
							     <label style="padding-left:27px;"></label>&ensp;
			               		 <!-- <input class="form-control form-control form-control-sm" type="date" name="tgl_order" id="tgl_order" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">&nbsp; -->
			               		<button class="btn btn-info" type="submit" style="font-size: 13px;"name="action">Tampilkan Data</button>
								</div>
							</form>
							</div>	
						</div>
				<input type="hidden" id="jmlpp" value="1"> 
				</div>
	</div>
</div>
<script type="text/javascript">

	/*          ================================= MODAL TAMBAH FORM ========================================*/

	$(document).ready(function(){
		// Tambah Detail PP
        $("#tambah-detailpp").click(function(){ // Ketika tombol Tambah Data Form di klik
	    var jumlah = parseInt($("#jmlpp").val()); // Ambil jumlah data form pada textbox pesanan baru
	    var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
	      
	    // Kita akan menambahkan form dengan menggunakan append
	    // pada sebuah tag div yg kita beri id 
	    $("#insert-detailpp").append("<div class='row'>"
		+	"<div class='col-md-12'>"
		+	"<div class='form-row'>"
		+		"<div class='form-group col-md-3' hidden=''>"
		+		    "<label>Kode Detail</label>"
		+		    "<input type='text' class='form-control form-control-sm' name='kode_detail[]' id='kd_dtl'>"
		+	    "</div>"
		+		"<div class='form-group col-md-3'>"
		+	    "<label>NO Order PP</label>"		
		+			"<div class='input-group-prepend'>"
	    +           	"<button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#modal-mts"+nextform+"'> Cari</button>"
		+		    "<input type='text' class='form-control form-control-sm' name='no_orderppcmb[]' id='no_ordercmb' autofocus autocomplete='off' required=''>"
	    +			"</div>"
		+	    "</div>"		
		+		"<div class='form-group col-md-3'>"
		+		    "<label>Barang</label>"
		+		    "<input type='text' class='form-control form-control-sm' name='nama_brg[]' id='nm_brg' readonly=''>"
		+		    "<input type='text' class='form-control form-control-sm' name='kode_brg[]' id='kd_brg' hidden=''>"
		+	    "</div>"
		+		"<div class='form-group col-md-2'>"
		+		    "<label>WO</label>"
		+		    "<input type='text' class='form-control form-control-sm' name='kode_wo[]' id='kd_wo' readonly=''>"
		+	    "</div>"
		+	"</div>"
		+	"<div class='form-row'>"		
		+		"<div class='form-group col-md-2' hidden=''>"
		+			"<label>Kode Gudang Trans</label>"
		+			"<input type='text' class='form-control form-control-sm' name='kode_gudang_trans[]' value='3' autofocus autocomplete='off' >"
		+		"</div>"
		+		"<div class='form-group col-md-2'>"
		+		    "<label>Gulung</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='gulung_gdg[]' step=any min='0' required=''>"
		+	    "</div>"
		+		"<div class='form-group col-md-2'>"
		+		    "<label>Yard</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='kegudang[]' step=any min='0' required=''>"
		+	    "</div>"		
		+	    "<div class='form-group col-md-2' hidden=''>"
		+		    "<label>Tgl Kegudang</label>"
		+		    "<input type='date' class='form-control form-control-sm' name='tgl_kegudang[]' value='<?php echo date('Y-m-d');?>' autocomplete='off'>"
		+	    "</div>"
		+		"<div class='form-group col-md-2'>"
		+		    "<label>Mts Gudang</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='mtsgudang[]' step=any min='0' required=''>"
		+	    "</div>"
		+	    "<div class='form-group col-md-2'>"
		+		    "<label>STD Potong</label>"					
		+		    "<select class='form-control form-control-sm' name='kode_stdpot[]' required=''>"
		+				"<option selected value=''>-- Pilih --</option>"
		+				"<option value='1'>UTUH (60 UP)</option>"
		+				"<option value='2'>15.31</option>"
		+				"<option value='3'>III (30-59)</option>"
		+				"<option value='4'>IV (10-29)</option>"
		+				"<option value='5'>V (5-9)</option>"
		+				"<option value='6'>VI (1-4)</option>"
		+				"<option value='7'>UTUH (60 UP C2)</option>"
		+				"<option value='8'>CACAT</option>"
		+			"</select>"
		+	    "</div>"		
		+	    "<div class='form-group col-md-2'>"
		+		    "<label>Return</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='return[]' step=any min='0' required=''>"
		+	    "</div>"
		+	    "<div class='form-group col-md-2'>"
		+		    "<label>Selesai</label>"					
		+		    "<select class='form-control form-control-sm' name='selesai[]' required=''>"
		+				"<option selected value='T'>Belum Selesai</option>"
		+				"<option value='T'>Belum Selesai</option>"
		+				"<option value='Y'>Selesai</option>"
		+			"</select>"
		+	    "</div>"
		+	"</div><hr>"
		+"</div>"
		

		//<!-- modal  -->

		//"<!-- ============================================== MODAL CARI DATA BARANG =========================================== -->"
		+	"<div class='modal' id='modal-mts"+nextform+"'>"
		+	    "<div class='modal-dialog modal-lg'>"
		+	      "<div class='modal-content'>"
		+	        "<div class='modal-header'>"
		+	          "<h5 class='modal-title'>Cari Data PP</h5>"
		+	          "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"
		+	            "<span aria-hidden='true'>&times;</span>"
		+	          "</button>"
		+	        "</div>"
		+	        "<div class='modal-body'>"
		+	        	"<table id='caripp"+nextform+"' class='table table-sm table-bordered table-responsive-md table-hover dataTable' role='grid'>"
		+	        		"<thead>"
		+	        			"<tr>"
		+		        			"<th>No PP</th>"
		+		        			"<th>Tanggal</th>"
		+		        			"<th>Nama Barang</th>"
		+		        			"<th>Kode WO</th>"
		+		        			"<th>Nama Jenis</th>"
		+		        			"<th>Nama Group</th>"
		+		        			"<th>Nama Proses</th>"
		+	        			"</tr>"
		+	        		"</thead>"	 
		+	        		"<tbody>"
		+	        		"<?php foreach ($get_packpp as $i) { ?>"
		+	        			"<tr id='pilih_pp"+nextform+"'"
		+							"kode_cdetail ='<?php echo $i->kode_dtl_packing?>'"
		+							"no_corderppcmb ='<?php echo $i->no_orderppcmb?>'"
		+							"tgl_cpp ='<?php echo $i->tgl_packing?>'"
		+							"kode_cbrg ='<?php echo $i->kode_brg?>'"
		+							"nama_cbrg ='<?php echo $i->nama_brg?>'"
		+							"kode_cwo ='<?php echo $i->kode_wo?>'"
		+							"kode_cjenis ='<?php echo $i->kode_jenis?>'"
		+							"nama_cjenis ='<?php echo $i->nama_jenis?>'"
		+							"kode_cgroup ='<?php echo $i->kode_group?>'"
		+							"nama_cgroup ='<?php echo $i->nama_group?>'"
		+							"kode_cproses ='<?php echo $i->kode_proses?>'"
		+							"nama_cproses ='<?php echo $i->kel?>'"
		+	        			">"
		+	        				"<td><?php echo $i->no_orderppcmb?></td>"		
		+	        				"<td><?php echo $i->tgl_packing?></td>"
		+	        				"<td><?php echo $i->nama_brg?></td>"
		+	        				"<td><?php echo $i->kode_wo?></td>"
		+	        				"<td><?php echo $i->nama_jenis?></td>"		
		+	        				"<td><?php echo $i->nama_group?></td>"
		+	        				"<td><?php echo $i->kel?></td>"
		+	        			"</tr>"
		+		        	"<?php } ?>"
		+	        		"</tbody>"
		+	        	"</table>"
		+	        "</div>"
		+	        "<div class='modal-footer justify-content-between' style='font-size: 11pt;'>"
		+	          "<b><i>* Pilih PP dengan cara klik pada kolom data</i></b>"
		+	        "</div>"
		+	      "</div>"
		+	    "</div>"
		+	 "</div>"
		// <!-- ==================================================================================================================== -->
		//<!--  /.modal  -->
	);

		// set id dengan id baru
		document.getElementById("kd_dtl").id 		= "kd_dtl"+nextform;
		document.getElementById("no_ordercmb").id 	= "no_ordercmb"+nextform;
		document.getElementById("kd_brg").id 		= "kd_brg"+nextform;
		document.getElementById("nm_brg").id 		= "nm_brg"+nextform;
		document.getElementById("kd_wo").id 		= "kd_wo"+nextform;

		
			// tabel no permintaan
			$(function () {
				$("#caripp"+nextform).DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});

		// get datatabel BARANG 
		$(document).on('click', '#pilih_pp'+nextform, function (e) {
			document.getElementById("kd_dtl"+nextform).value 		= $(this).attr('kode_cdetail');
			document.getElementById("no_ordercmb"+nextform).value 	= $(this).attr('no_corderppcmb');
			document.getElementById("kd_brg"+nextform).value 		= $(this).attr('kode_cbrg');
			document.getElementById("nm_brg"+nextform).value 		= $(this).attr('nama_cbrg');
			document.getElementById("kd_wo"+nextform).value 		= $(this).attr('kode_cwo');
			$('#modal-mts'+nextform).modal('hide');
			$('.close').click();
			// $('.modal-backdrop').remove();				
			// $(document.body).removeClass('modal-open');
		});

		 // PERHITUNGAN METER KE YARD
		 // Set Id dangan Nama Baru
		 // document.getElementById("amet").id = "amet"+nextform; 
		 // document.getElementById("ayad").id = "ayad"+nextform; 
		 // // Mengisis data id Dengan id baru
		 // $("#amet"+nextform).keyup(function(){
		 // 	ss = $(this).val();
		 // 	dd = ss * 1.0936;
		 // 	hasil = dd.toFixed(2);
			// a = Math.floor(hasil);
			// ff = hasil-a;
			// d = ff.toFixed(2);		
			// if(d < 0.25){
			// 	fd = '00';
			// 	fd1 = a+'.'+fd;
			// }else if(d >= 0.25 && d < 0.50)
			// {
			// 	fd = 0.25;
			// 	fd1 = a+fd;
			// }else if(d >= 0.50 && d < 0.75)
			// {
			// 	fd = 0.50;
			// 	fd1 = a+fd;
			// }else if(d >= 0.75 && d <= 0.99)
			// {
			// 	fd = 0.75;
			// 	fd1 = a+fd;
			// }
		 // 	document.getElementById("ayad"+nextform).value = fd1;
		 // });		 


		 $("#jmlpp").val(nextform); // Ubah value textbox jmlorderwoff dengan variabel nextform	
		});

		// Buat fungsi untuk mereset form ke semula
		$("#reset-detailpp").click(function() {
			var s = confirm("Yakin Reset?");
			if(s){
		     $("#insert-detailpp").html(""); // Kita kosongkan isi dari div insert-form
		      $("#jmlpp").val("1"); // Ubah kembali value jumlah form menjadi 1
		    }else{
		   	 return false;
		    }
		}); 

		/*          =============================== END =====================================*/
	});
</script>