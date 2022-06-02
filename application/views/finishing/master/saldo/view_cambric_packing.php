<br><br><br>
<div class="col-md-12">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Saldo Awal Cambric Packing</h3>
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
                  <th>AwalCmbTH</th>
                  <th>AwalCmbBL</th>
                  <th>C01</th>
                  <th>C02</th>
                  <th>C03</th>
                  <th>C04</th>
                  <th>C05</th>
                  <th>C06</th>
                  <th>C07</th>
                  <th>C08</th>
                  <th>C09</th>
                  <th>C10</th>
                  <th>C11</th>
                  <th>C12</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->awalcmbth?></td>
                  <td><?php echo $row->awalcmbbl?></td>
                  <td><?php echo $row->c01?></td>
                  <td><?php echo $row->c02?></td>
                  <td><?php echo $row->c03?></td>
                  <td><?php echo $row->c04?></td>
                  <td><?php echo $row->c05?></td>
                  <td><?php echo $row->c06?></td>
                  <td><?php echo $row->c07?></td>
                  <td><?php echo $row->c08?></td>
                  <td><?php echo $row->c09?></td>
                  <td><?php echo $row->c10?></td>
                  <td><?php echo $row->c11?></td>
                  <td><?php echo $row->c12?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                      <a title="Ubah Saldo" href="<?php echo site_url('master/saldo/ubah_cambric_packing/'.$row->kode_brg)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <!-- <a  title="Hapus" href="<?php echo site_url('#'.$row->kode_brg)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a></td> -->
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
