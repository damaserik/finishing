<br><br><br>
<div class="col-md-12">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Saldo Awal Grey</h3>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>Barang</th>
                  <th>Group</th>
                  <th>Jenis</th>
                  <th>AwalGryTH</th>
                  <th>AwalGryBL</th>
                  <th>G01</th>
                  <th>G02</th>
                  <th>G03</th>
                  <th>G04</th>
                  <th>G05</th>
                  <th>G06</th>
                  <th>G07</th>
                  <th>G08</th>
                  <th>G09</th>
                  <th>G10</th>
                  <th>G11</th>
                  <th>G12</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->awalgryth?></td>
                  <td><?php echo $row->awalgrybl?></td>
                  <td><?php echo $row->g01?></td>
                  <td><?php echo $row->g02?></td>
                  <td><?php echo $row->g03?></td>
                  <td><?php echo $row->g04?></td>
                  <td><?php echo $row->g05?></td>
                  <td><?php echo $row->g06?></td>
                  <td><?php echo $row->g07?></td>
                  <td><?php echo $row->g08?></td>
                  <td><?php echo $row->g09?></td>
                  <td><?php echo $row->g10?></td>
                  <td><?php echo $row->g11?></td>
                  <td><?php echo $row->g12?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                      <a title="Ubah Saldo" href="<?php echo site_url('master/saldo/ubah_awal_grey/'.$row->kode_brg)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <!-- <a  title="Hapus" href="<?php echo site_url('#'.$row->kode_brg)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a></td> -->
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
