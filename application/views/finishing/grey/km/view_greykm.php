<br><br><br><br>
<div class="container">
<div class="col-md-12" style="font-size: 11pt;">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Penerimaan Grey KM</h3>
    </div>
    <div class="col-md-2 col-sm-3">
      <a href="<?php echo site_url('grey/greykm/tambah_greykm');?>"><button type="button" class="btn btn-dark btn-block">Tambah</button></a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>No Order</th>
                  <th>Tanggal</th>
                  <th>Group</th>
                  <th width="12%">Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->no_ordergry?></td>
                  <td><?php echo $row->tgl_order?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_ordergry)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <a  title="Detail Order" href="<?php echo site_url('grey/greykm/view_dtlgreykm/'.$row->kode_ordergry)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; 
                      <a data-toggle="modal" data-target="#ubah_grykm<?php echo $row->kode_ordergry?>" title="Edit Order" href=""><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <a  title="Hapus" href="<?php echo site_url('grey/greykm/hapus_greykm/'.$row->kode_ordergry)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a>&nbsp;
                      <!-- <a title="Edit Selesai" href="<?php echo site_url('#'.$row->no_ordergry)?>"><i class="fas fa-edit"></i></a> -->

                      <div class="modal fade" id="ubah_grykm<?php echo $row->kode_ordergry?>">
                              <div class="modal-dialog  modal-sm">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Edit Order Grey</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body"><?php $id = $row->kode_ordergry?>
                                <?php echo form_open('grey/greykm/view_grykmhdr/'.$id);?>
                                <div class="col-md-12">
                                  <div class="form-group" align="left">
                                    <label >No Order Grey</label>
                                    <input class="form-control form-control-sm" type="text" name="no_ordergry" value="<?php echo $row->no_ordergry?>">
                                    <input class="form-control form-control-sm" type="text" name="kode" readonly="" hidden=""  value="<?php echo $row->kode_ordergry?>">
                                  </div>
                                  <div class="form-group" align="left">
                                    <label>Tgl Order</label>
                                    <input class="form-control form-control-sm" type="date" name="tgl_order" value="<?php echo $row->tgl_order?>">
                                  </div>
                                  <div class="form-group" align="left">
                                    <label>Group</label>
                                    <input class="form-control form-control-sm" type="text" readonly="" value="<?php echo $row->nama_group?>">
                                  </div>
                                  <hr>
                                  <div class="for-group">
                                          <input type="submit" class="btn btn-primary btn-sm float-right toaster" value="Simpan">
                                  </div>
                                </div>
                                </form>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                          </div>
                  </td>
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
</div>