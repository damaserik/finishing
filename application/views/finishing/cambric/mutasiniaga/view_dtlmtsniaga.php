<br><br><br>
<div class="col-md-12" style="font-size: 11pt;">
  <div class="row">
    <div class="col-md-11 col-sm-9">
      <h3>Detail Cambric Ke Niaga/Gudang</h3>
    </div>
<!--     <div class="col-md-1">
      <a href="#"><button type="button" class="fas fa-step-backward btn-dark btn-sm" style="height: 23pt;"></button></a>
      <a href="#"><button type="button" class="fas fa-step-forward btn-dark btn-sm" style="height: 23pt;"></button></a>
    </div>  -->
     <div class="col-md-1 col-sm-3">
      <a href="<?php echo site_url('cambric/mtsniaga/view_mtsniaga');?>"><button type="button" class="btn btn-dark btn-block btn-sm">Kembali</button></a>
    </div> 
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>No Nota</th>
                  <th>No Order PP</th>
                  <th>Tgl Keluar</th>
                  <th>Barang</th>
                  <th>Kode WO</th>
                  <th>Gulung</th>
                  <th>Kegudang</th>
                  <th>Std Pot</th>
                  <th>Kel</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th colspan="6" style="text-align:left">Total</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
              </tr>
          </tfoot>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->no_ordercmb?></td>
                  <td><?php echo $row->no_orderppcmb?></td>
                  <td><?php echo $row->tgl_kegudang?></td>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->kode_wo?></td>
                  <td><?php echo $row->gulung_gdg?></td>
                  <td><?php echo $row->kegudang?></td>
                  <td><?php echo $row->kode_stdpot?></td>
                  <td><?php echo $row->kel?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                     <!--  <a title="Edit" href="<?php echo site_url('cambric/camfolding/edit_folding/'.$row->kode_detail)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp; -->
                      <a data-toggle="modal" data-target="#ubah_cmbniaga<?php echo $row->kode_detail?>" title="Edit" href=""><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp; 
                      <a title="Hapus" href="<?php echo site_url('cambric/mtsniaga/hapus_mtsniaga/'.$row->kode_detail)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a>
                      <!-- Modal Form -->
                          <div class="modal fade" id="ubah_cmbniaga<?php echo $row->kode_detail?>">
                              <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Mutasi Niaga</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><?php $id = $row->kode_detail?>
                                        <?php echo form_open('cambric/mtsniaga/view_emtsniaga/'.$id);?>
                                        <div class="form-row">
                                            <div class="col-md-4" hidden="">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Kode Detail</label>
                                                <input type="text" class="form-control form-control-sm" name="kode_detail" value="<?php echo $row->kode_detail?>" readonly="">
                                              </div>  
                                            </div>  
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">No Nota</label>
                                                <input type="text" class="form-control form-control-sm" name="no_ordercmb" value="<?php echo $row->no_ordercmb?>" required="" readonly="">
                                              </div>  
                                            </div> 
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">No Order PP</label>
                                                <input type="text" class="form-control form-control-sm" name="no_orderppcmb" value="<?php echo $row->no_orderppcmb?>" required="" readonly="">
                                              </div>  
                                            </div>       
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Nama Barang</label>
                                                <input type="text" class="form-control form-control-sm" name="nama_brg" value="<?php echo $row->nama_brg?>" required="" readonly="">
                                              </div>  
                                            </div>
                                        </div>
                                        <div class="form-row">            
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Gulung</label>
                                                <input type="number" class="form-control form-control-sm" name="gulung_gdg" value="<?php echo $row->gulung_gdg?>" step=any required="">
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Kegudang</label>
                                                <input type="number" class="form-control form-control-sm" name="kegudang" value="<?php echo $row->kegudang?>" step=any required="">
                                              </div>
                                            </div>                                            
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Mts Gudang</label>
                                                <input type="number" class="form-control form-control-sm" name="mtsgudang" value="<?php echo $row->mtsgudang?>" step=any>
                                              </div>
                                            </div>
                                            <div class="col-md-4" hidden="">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Kd Gudang Trans</label>
                                                <input type="text=" class="form-control form-control-sm" name="kode_gudang_trans" value="<?php echo $row->kode_gudang_trans?>" step=any>
                                              </div>
                                            </div>
                                        </div>
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
<script type="text/javascript">
$(document).ready(function() {
  $('#myTable').dataTable().fnDestroy();
    $('#myTable').dataTable({
      "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total of the complete result 
            var kegudangTotal = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
      $( api.column( 0 ).footer() ).html('Total');
            $( api.column( 6 ).footer() ).html(kegudangTotal);
        }
    } );
} );
</script>

