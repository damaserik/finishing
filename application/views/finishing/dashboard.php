<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Aplikasi Finishing</title>
	<!-- DataTablees -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables/datatables.min.css"/>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesome-free/css/all.min.css">
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
   	<!--<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-2.1.4.min.js'></script>
     <script type='text/javascript' src='<?php echo base_url();?>assets/js/autocomplete/jquery.autocomplete.js'></script> -->
    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/js/autocomplete/jquery.autocomplete.css' rel='stylesheet' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.date.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.time.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/default.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/default.date.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/default.time.css" />

</head>
<body>	

		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		 
		  <!-- Brand -->
		  <a class="navbar-brand mb-0 h1" href="<?php echo site_url('dashboard');?>">
		  	<img src="<?php echo base_url();?>assets/images/logo.png" height="33" class="d-inline-block align-top" alt="">
		  </a>
		  <div class="col-md-9">
		  <!-- Links -->
		  <ul class="navbar-nav">
		    <!-- Dropdown master-->
		    <li class="nav-item dropdown">
		      	<a class="nav-link text-light" href="<?php echo site_url('#');?>" id="navbardrop" data-toggle="dropdown">File Master</a>
		      	<div class="dropdown-menu">
			        <a class="dropdown-item" href="<?php echo site_url('master/barang/');?>">Input Jenis Barang</a>
			        <div class="dropdown dropdown-submenu">
			        	<a class="dropdown-item">Input Saldo Awal</a>
			        	<ul class="dropdown-menu" style="margin: -20% 0% 0% 100%;">
							<li><a class="dropdown-item" href="<?php echo site_url('master/saldo/view_awal_grey/');?>">Saldo Awal Grey</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('master/saldo/view_cambric_packing/');?>">Saldo Awal Cambric Packing</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('master/saldo/view_cambric_folding/');?>">Saldo Awal Cambric Folding</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('#');?>">Saldo Awal Cambric Per PP</a></li>
						</ul>
					</div>
			        <div class="dropdown dropdown-submenu">
			        	<a class="dropdown-item">Input Group/Jenis/Proses</a>
			        	<ul class="dropdown-menu" style="margin: -20% 0% 0% 100%;">
							<li><a class="dropdown-item" href="<?php echo site_url('master/kode/view_group/');?>">Input Group</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('master/kode/view_jenis/');?>">Input Jenis</a></li>
							<li><a class="dropdown-item" href="<?php echo site_url('master/kode/view_proses/');?>">Input Proses</a></li>
						</ul>
					</div>
			        <a class="dropdown-item" href="<?php echo site_url('master/kode/view_wo/');?>">Input Kode WO/Pemilik</a>
			        <a class="dropdown-item" href="<?php echo site_url('#');?>">Tutup Bulan</a>
		      	</div>
		    </li>
		    <li class="nav-item dropdown">
		      	<a class="nav-link text-light" href="<?php echo site_url('#');?>" id="navbardrop" data-toggle="dropdown">
		        Input Grey </a>
		  		<div class="dropdown-menu">
		        	<a class="dropdown-item" href="<?php echo site_url('grey/greywo/view_greywo/')?>">Input Penerimaan Grey WO</a>
		        	<a class="dropdown-item" href="<?php echo site_url('grey/greykm/view_greykm/')?>">Input Penerimaan Grey KM</a>
		        	<a class="dropdown-item" href="<?php echo site_url('grey/greydkrj/view_greydkrj/')?>">Input Grey dikerjakan/diretur</a>
		        	<a class="dropdown-item" href="<?php echo site_url('grey/greyedit/view_greystat1/')?>">Edit Order Finishing Belum Selesai</a>
		        	<a class="dropdown-item" href="<?php echo site_url('grey/greyedit/view_greystat2/')?>">Edit Order Finishing Selesai</a>
				</div>
    		</li>
    		<li class="nav-item dropdown">
		      	<a class="nav-link text-light" href="<?php echo site_url('#');?>" id="navbardrop" data-toggle="dropdown">
		        Input Cambric </a>
		  		<div class="dropdown-menu">
		        	<a class="dropdown-item" href="<?php echo site_url('cambric/camfolding/tambah_folding')?>">Input Produksi Folding</a>
		        	<a class="dropdown-item" href="<?php echo site_url('cambric/campacking/tambah_packing')?>">Input Produksi Packing</a>
		        	<a class="dropdown-item" href="<?php echo site_url('cambric/mtsniaga/tambah_mtsniaga')?>">Pengeluaran Cambric ke Niaga/Gudang</a>
		        	<!-- <a class="dropdown-item" href="<?php echo site_url('#')?>">Pengeluaran Cambric Cacat/Potong ke Gudang</a> -->
		        	<a class="dropdown-item" href="<?php echo site_url('cambric/saldopacking/tambah_saldopacking')?>">Input Saldo Awal Bulan Cambric Packing</a>
		        	<!-- <a class="dropdown-item" href="<?php echo site_url('#')?>">Input Saldo Awal Folding Per PP</a> -->
				</div>
    		</li>
    		<li class="nav-item dropdown">
		      	<a class="nav-link text-light" href="<?php echo site_url('#');?>" id="navbardrop" data-toggle="dropdown">
		        Laporan </a>
		  		<div class="dropdown-menu">
			  		<div class="dropdown dropdown-submenu">
			        	<a class="dropdown-item" href="<?php echo site_url('#')?>">Laporan Grey</a>
			        	<ul class="dropdown-menu" style="margin: -20% 0% 0% 100%;">
							<li><a class="dropdown-item" href="<?php echo site_url('grey/greylap/view_greylap/');?>">Laporan Mutasi Grey</a></li>
						</ul>
					</div>
	          		<div class="dropdown dropdown-submenu">
			        	<a class="dropdown-item" href="<?php echo site_url('#')?>">Laporan Cambric</a>
						<ul class="dropdown-menu" style="margin: -20% 0% 0% 100%;">
							<li><a class="dropdown-item" href="<?php echo site_url('cambric/camlap/view_camlap/');?>">Laporan Mutasi Cambric</a></li>
						</ul>
					</div>
				</div>
    		</li>
    		<li class="nav-item dropdown">
		      	<a class="nav-link text-light" href="<?php echo site_url('#');?>" id="navbardrop" data-toggle="dropdown">
		        Maintenance </a>
		  		<div class="dropdown-menu">
		        	<a class="dropdown-item" href="<?php echo site_url('#')?>">Edit Produksi Salah KDTR</a>
		        	<a class="dropdown-item" href="<?php echo site_url('#')?>">Edit Input Grey Hilang</a>
		        	<a class="dropdown-item" href="<?php echo site_url('#')?>">Edit Pengeluaran Cambric Hilang</a>
		        	<a class="dropdown-item" href="<?php echo site_url('#')?>">Cari Nomor Input Grey</a>
		        	<a class="dropdown-item" href="<?php echo site_url('#')?>">Edit Packing</a>
				</div>
    		</li>
		    <!-- Dropdown master End -->


		    <!-- Dropdown maintenance-->
<!-- 		    <li class="nav-item dropdown">
		      <a class="nav-link text-light" href="#" id="navbardrop" data-toggle="dropdown">
		        Maintenance
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="#"></a>
		      </div>
		    </li> -->
		    <!-- Dropdown maintenance End -->	

		  </ul>
		  </div>

		  <div class="row justify-content-end">
			  <div class="col-md-3">
				  <!-- Links -->
				  <ul class="navbar-nav">
				    <li class="nav-item dropdown">
				      <a class="nav-link text-light" href="<?php echo site_url('#');?>" id="navbardrop" data-toggle="dropdown">
				        <!-- <?php echo $this->session->userdata('user_name');?>  -->
				      </a>
				      <div class="dropdown-menu">
				        <!-- <a class="dropdown-item" href="<?php echo site_url('login/logout');?>">Logout</a> -->
				      </div>
				    </li>
				  </ul>
			  </div>
		  </div>
		</nav>
		
		<?php $content ?>

	<!-- Optional JavaScript -->
    
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/datatables.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          var table = $('#myTable').DataTable({
          	"deferRender": true,
            "processing": true,
            "order" : [],
          });
      });
    </script>
</body>
</html>