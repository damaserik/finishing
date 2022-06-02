<br><br><br>
<div class="col-md-12" style="font-size: 11pt;">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Detail Grey KM</h3>
    </div>
     <div class="col-md-2 col-sm-3">
      <a href="<?php echo site_url('grey/greykm/view_greykm');?>"><button type="button" class="btn btn-dark btn-block">Kembali</button></a>
    </div> 
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>No Order Grey</th>
                  <th>Tanggal</th>
                  <th>No Order PP</th>
                  <th>Kain Luar/WO</th>
                  <th>Barang</th>
                  <th>Gulung</th>
                  <th>Meter</th>
                  <th>Yard</th>
                  <th>Terima</th>
              <!--    <th>Proses</th> 
                  <th>Return</th> -->
                  <th>Jenis</th>
                  <th>Kel</th>
                  <th>Group</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->no_ordergry?></td>
                  <td><?php echo $row->tgl_dtl_order?></td>
                  <td><?php echo $row->no_orderpp?></td>
                  <td><?php echo $row->kain_luar?></td>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->gulung?></td>
                  <td><?php echo $row->meter?></td>
                  <td><?php echo $row->yard?></td>
                  <td><?php echo $row->terima?></td>
    <!--               <td><?php echo $row->proses?></td>
                  <td><?php echo $row->return?></td> -->
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->kel?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                      <a title="Edit" href="<?php echo site_url('grey/greykm/edit_greykm/'.$row->kode_detail)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <a  title="Hapus" href="<?php echo site_url('grey/greykm/hapus_greykmdtl/'.$row->kode_detail)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a></td>
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>

