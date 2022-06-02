<br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Barang</h3>
    </div>
    <div class="col-md-2 col-sm-3">
      <a href="<?php echo site_url('master/barang/tambah_barang');?>"><button type="button" class="btn btn-dark btn-block">Tambah</button></a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>Nama Brg</th>
                  <th>Jenis</th>
                  <th>Group</th>
                  <th>Proses</th>
                  <th>AwalGryTH</th>
                  <th>AwalGryBL</th>
                  <th>AwalCmbTH</th>
                  <th>AwalCmbBL</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td><?php echo $row->kel?></td>
                  <td><?php echo $row->awalgryth?></td>
                  <td><?php echo $row->awalgrybl?></td>
                  <td><?php echo $row->awalcmbth?></td>
                  <td><?php echo $row->awalcmbbl?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                      <a title="Edit" href="<?php echo site_url('master/barang/edit_barang/'.$row->kode_brg)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <a  title="Hapus" href="<?php echo site_url('master/barang/hapus_barang/'.$row->kode_brg)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a></td>
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
<br><br><br><br>

