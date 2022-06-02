<br><br><br>
<div class="container  col-md-9">
	<div class="card card-outline card-dark">
		<div class="card-header">
		<h3>Form Input Grey KM</h3>
		</div>
	<div class="card bg-light">
	  <div class="card-body">		
			<?php echo validation_errors();?>
			<?php echo form_open('grey/greykm/simpan_greykm/');?>
			<div class="form-row">
				<div class="form-group col-md-2" hidden="">
				    <label>Kode Order Grey</label>
				    <input type="text" class="form-control form-control-sm" value="<?php echo $kode ?>" name="kode_ordergry" autocomplete="off">
			    </div>
			    <div class="form-group col-md-4">
				    <label>NO Order Grey</label>
				    <input type="text" class="form-control form-control-sm" name="no_ordergry" autofocus autocomplete="off" required="">
			    </div>
			    <div class="form-group col-md-2">
				    <label>Tanggal</label>
				    <input class="form-control form-control form-control-sm" type="date" name="tgl_order" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>">
			    </div>
			    <div class="form-group col-md-3">
				    <label>Group</label>					
				    <select class="form-control form-control-sm" name="kode_group" required="">
						<option selected value="G0001">KM</option>
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
			<b><i style="font-size: 14px;">* Silahkan klik (Tambah Form) untuk Menambahkan Order PP</i></b>
			<hr style="border: 1px solid green;">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group float-right">
						<input type="submit" class="btn btn-primary btn-sm toaster" value="Simpan">
						<a href="<?php echo site_url('grey/greykm/view_greykm');?>" class="btn btn-secondary btn-sm" onclick="return confirm('Yakin Cancel ?')">Batal</a>
					</div>
				</div>
			</div>
			<br>
			</form>
			<input type="hidden" id="jmlpp" value="1"> 
		</div>
	</div>
</div>
</div>
<br>


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
		+		"<div class='form-group col-md-4'>"
		+	    "<label>NO Order PP</label>"
		+		    "<input type='text' class='form-control form-control-sm' name='no_orderpp[]' autofocus autocomplete='off' required=''>"
		+	    "</div>"
		+	    "<div class='form-group col-md-2'>"
		+		    "<label>Kain Luar</label>"
		+		    "<input type='text' class='form-control form-control-sm' name='kain_luar[]' autofocus autocomplete='off'>"
		+	    "</div>"
		+	"</div>"
		+	"<div class='form-row'>"	
		+		"<div class='form-group col-md-3'>"
		+		    "<label>Barang</label>"
		+			"<div class='input-group-prepend'>"
	    +            	"<button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#modal-barang"+nextform+"'> Cari</button>"
	    +            	"<input class='form-control form-control-sm' type='text' name='nama_brg[]' readonly='' id='nm_brg'>"
	    +            "</div>"
		+			"<input class='form-control form-control-sm' type='text' name='kode_brg[]' required='' id='kd_brg' hidden=''>"
		+	    "</div>"
		+		"<div class='form-group col-md-2'>"
		+		    "<label>Gulung</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='gulung[]' step=any min='0' required=''>"
		+	    "</div>"
		+		"<div class='form-group col-md-2'>"
		+		    "<label>Meter</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='meter[]' step=any id='amet' min='0' required=''>"
		+	    "</div>"
		+		"<div class='form-group col-md-2'>"
		+		    "<label>Yard</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='yard[]' id='ayad' readonly='' required=''>"
		+	    "</div>"
		// +	    "<div class='form-group col-md-3'>"
		// +		    "<label>Transaksi</label>"					
		// +		    "<select class='form-control form-control-sm' name='kode_terima_trans[]' required='' readonly=''>"
		// +				"<option selected value='1'>Terima</option>"
		// // +				"<option value='1'>Terima</option>"
		// // +				"<option value='2'>Proses/Dikerjakan</option>"
		// // +				"<option value='3'>Return</option>"
		// +			"</select>"
		// +	    "</div>"		
		+	    "<div class='form-group col-md-2'>"
		+		    "<label>Jumlah Terima</label>"
		+		    "<input type='number' class='form-control form-control-sm' name='terima[]' step=any min='0' required=''>"
		+	    "</div>"
		+	"</div><hr>"
		+"</div>"
		

		//<!-- modal  -->

		//"<!-- ============================================== MODAL CARI DATA BARANG =========================================== -->"
		+	"<div class='modal' id='modal-barang"+nextform+"'>"
		+	    "<div class='modal-dialog modal-lg'>"
		+	      "<div class='modal-content'>"
		+	        "<div class='modal-header'>"
		+	          "<h5 class='modal-title'>Cari Data Barang</h5>"
		+	          "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"
		+	            "<span aria-hidden='true'>&times;</span>"
		+	          "</button>"
		+	        "</div>"
		+	        "<div class='modal-body'>"
		+	        	"<table id='caribarang"+nextform+"' class='table table-sm table-bordered table-responsive-md table-hover dataTable' role='grid'>"
		+	        		"<thead>"
		+	        			"<tr>"
		+		        			"<th>Nama Barang</th>"
		+		        			"<th>Nama Jenis</th>"
		+		        			"<th>Nama Group</th>"
		+		        			"<th>Nama Proses</th>"
		+	        			"</tr>"
		+	        		"</thead>"	 
		+	        		"<tbody>"
		+	        		"<?php foreach ($get_barang as $i) { ?>"
		+	        			"<tr id='pilih_barang"+nextform+"'"
		+							"kode_cbrg ='<?php echo $i->kode_brg?>'"
		+							"nama_cbrg ='<?php echo $i->nama_brg?>'"
		+							"kode_cjenis ='<?php echo $i->kode_jenis?>'"
		+							"nama_cjenis ='<?php echo $i->nama_jenis?>'"
		+							"kode_cgroup ='<?php echo $i->kode_group?>'"
		+							"nama_cgroup ='<?php echo $i->nama_group?>'"
		+							"kode_cproses ='<?php echo $i->kode_proses?>'"
		+							"nama_cproses ='<?php echo $i->kel?>'"
		+	        			">"
		+	        				"<td><?php echo $i->nama_brg?></td>"
		+	        				"<td><?php echo $i->nama_jenis?></td>"		
		+	        				"<td><?php echo $i->nama_group?></td>"
		+	        				"<td><?php echo $i->kel?></td>"
		+	        			"</tr>"
		+		        	"<?php } ?>"
		+	        		"</tbody>"
		+	        	"</table>"
		+	        "</div>"
		+	        "<div class='modal-footer justify-content-between' style='font-size: 11pt;'>"
		+	          "<b><i>* Pilih Barang dengan cara klik pada kolom data</i></b>"
		+	        "</div>"
		+	      "</div>"
		+	    "</div>"
		+	 "</div>"
		// <!-- ==================================================================================================================== -->
		//<!--  /.modal  -->
	);

		// set id dengan id baru
		document.getElementById("kd_brg").id 		= "kd_brg"+nextform;
		document.getElementById("nm_brg").id 		= "nm_brg"+nextform;

		
			// tabel no permintaan
			$(function () {
				$("#caribarang"+nextform).DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});

		// get datatabel BARANG 
		$(document).on('click', '#pilih_barang'+nextform, function (e) {
			document.getElementById("kd_brg"+nextform).value 		= $(this).attr('kode_cbrg');
			document.getElementById("nm_brg"+nextform).value 		= $(this).attr('nama_cbrg');
			$('#modal-barang'+nextform).modal('hide');
			$('.close').click();
			// $('.modal-backdrop').remove();				
			// $(document.body).removeClass('modal-open');
		});

		 // PERHITUNGAN METER KE YARD
		 // Set Id dangan Nama Baru
		 document.getElementById("amet").id = "amet"+nextform; 
		 document.getElementById("ayad").id = "ayad"+nextform; 
		 // Mengisis data id Dengan id baru
		 $("#amet"+nextform).keyup(function(){
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
		 	document.getElementById("ayad"+nextform).value = fd1;
		 });		 


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