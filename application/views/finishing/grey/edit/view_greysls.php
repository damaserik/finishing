<br><br><br>
<div class="col-md-12" style="font-size: 11pt;">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Edit Order Finishing Selesai</h3>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
              <tr>
                  <!-- <th>No Order Grey</th> -->
                  <th>No Order PP</th>
                  <th>Tanggal</th>
                  <th>Kain Luar/WO</th>
                  <th>Kode WO</th>
                  <th>Barang</th>
                  <th>Jenis</th>
                  <th>Kel</th>
                  <th>Group</th>
                  <th>Gulung</th>
                  <th>Meter</th>
                  <th>Yard</th>
                  <th>Status</th>
                  <th>Aksi</th>
              </tr>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <!-- <td><?php echo $row->no_ordergry?></td> -->
                  <td><?php echo $row->no_orderpp?></td>
                  <td><?php echo $row->tgl_dtl_order?></td>
                  <td><?php echo $row->kain_luar?></td>
                  <td><?php echo $row->kode_wo?></td>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->kel?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td><?php echo $row->gulung?></td>
                  <td><?php echo $row->meter?></td>
                  <td><?php echo $row->yard?></td>
                  <td>
                  <?php if($row->selesai == 'Y'){ ?>
                    <span class="badge bg-success" data-toggle="tooltip" data-placement="top" title="Selesai">Selesai</span>
                  <?php }else{ ?>
                    <span class="badge bg-warning" data-toggle="tooltip" data-placement="top" title="Belum Selesai">Belum Selesai</span>
                  <?php } ?>
                  </td>
                  <td class="project-actions text-center">
                      <a data-toggle="modal" data-target="#ubah_sls<?php echo $row->kode_detail?>" title="Edit" href=""><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                          <div class="modal fade" id="ubah_sls<?php echo $row->kode_detail?>">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Order</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><?php $id = $row->kode_detail?>
                                        <?php echo form_open('grey/greyedit/edit_greystat2/'.$id);?>
                                        <div class="form-row">
                                            <div class="col-md-4" hidden="">
                                            <div class="form-group" align="left">
                                              <label style="font-size: 11pt;">Kode Detail</label>
                                              <input type="text" class="form-control form-control-sm" name="kode_detail" value="<?php echo $row->kode_detail?>" readonly="">
                                            </div>  
                                          </div>  
                                          <div class="col-md-12">
                                            <div class="form-group" align="left">
                                              <label style="font-size: 11pt;">No Order PP</label>
                                              <input type="text" class="form-control form-control-sm" name="no_orderpp" value="<?php echo $row->no_orderpp?>" required="" readonly="">
                                            </div>  
                                          </div>
                                        </div>
                                        <div class="form-row">                 
                                          <div class="col-md-12">
                                              <div class="form-group" align="left">
                                                <label style="font-size: 11pt;">Edit Status</label>
                                                <select class="form-control form-control-sm" name="selesai" value="<?php echo $row->selesai?>" step=any required="">
                                                  <option selected="" value="Y">Selesai</option>
                                                  <option value="">-- Pilih Status --</option>
                                                  <option value="T">Belum Selesai</option>
                                                  <option value="Y">Selesai</option>
                                                </select>
                                              </div>
                                          </div>
                                        </div>                                        
                                        <hr>
                                        <div class="for-group">
                                                <input type="submit" class="btn btn-primary btn-sm float-right toaster" value="Simpan">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                  </td>
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
