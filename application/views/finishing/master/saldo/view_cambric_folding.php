<br><br><br>
<div class="col-md-12">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Saldo Awal Cambric Folding</h3>
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
                  <th>AwalFldTH</th>
                  <th>AwalFldBL</th>
                  <th>F01</th>
                  <th>F02</th>
                  <th>F03</th>
                  <th>F04</th>
                  <th>F05</th>
                  <th>F06</th>
                  <th>F07</th>
                  <th>F08</th>
                  <th>F09</th>
                  <th>F10</th>
                  <th>F11</th>
                  <th>F12</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->awalfldth?></td>
                  <td><?php echo $row->awalfldbl?></td>
                  <td><?php echo $row->f01?></td>
                  <td><?php echo $row->f02?></td>
                  <td><?php echo $row->f03?></td>
                  <td><?php echo $row->f04?></td>
                  <td><?php echo $row->f05?></td>
                  <td><?php echo $row->f06?></td>
                  <td><?php echo $row->f07?></td>
                  <td><?php echo $row->f08?></td>
                  <td><?php echo $row->f09?></td>
                  <td><?php echo $row->f10?></td>
                  <td><?php echo $row->f11?></td>
                  <td><?php echo $row->f12?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                      <a title="Ubah Saldo" href="<?php echo site_url('master/saldo/ubah_cambric_folding/'.$row->kode_brg)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <!-- <a  title="Hapus" href="<?php echo site_url('#'.$row->kode_brg)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a></td> -->
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
