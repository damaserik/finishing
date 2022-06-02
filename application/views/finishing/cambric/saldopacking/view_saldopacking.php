<br><br><br>
<div class="col-md-12" style="font-size: 11pt;">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Saldo Awal Packing</h3>
    </div>    
     <div class="col-md-1 col-sm-3">
      <!-- <a href="<?php echo site_url('cambric/campacking/tambah_packing');?>"><button type="button" class="btn btn-dark btn-block btn-sm">Kembali</button></a> -->
    </div> 
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>No Order PP</th>
                  <th>Tgl Packing</th>
                  <th>Barang</th>
                  <th>Kode WO</th>
                  <th>Saldo Awal</th>
                  <th>Group</th>
                  <th>Jenis</th>
                  <th>Kel</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tfoot>
<!--               <tr>
                  <th colspan="5" style="text-align:left">Total</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
              </tr> -->
          </tfoot>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->no_orderppcmb?></td>
                  <td><?php echo $row->tgl_packing?></td>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->kode_wo?></td>
                  <td><?php echo $row->saldo_awal?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->kel?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                     <!--  <a title="Edit" href="<?php echo site_url('cambric/camfolding/edit_folding/'.$row->kode_dtl_packing)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp; -->
                      <a data-toggle="modal" data-target="#ubah_cmb<?php echo $row->kode_dtl_packing?>" title="Edit Saldo" href=""><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <!-- Modal Form -->
                          <div class="modal fade" id="ubah_cmb<?php echo $row->kode_dtl_packing?>">
                              <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Input Saldo Packing</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><?php $id = $row->kode_dtl_packing?>
                                        <?php echo form_open('cambric/campacking/view_pack/'.$id);?>
                                        <div class="form-row">
                                            <div class="col-md-4" hidden="">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Kode Detail</label>
                                                <input type="text" class="form-control form-control-sm" name="kode_dtl_packing" value="<?php echo $row->kode_dtl_packing?>" readonly="">
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
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Saldo Awal</label>
                                                <input type="number" class="form-control form-control-sm" name="saldo_awal" value="<?php echo $row->saldo_awal?>" step=any required="">
                                              </div>
                                            </div>
                                            <div class="col-md-4" hidden="">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Kd Saldo Trans</label>
                                                <input type="text=" class="form-control form-control-sm" name="kode_saldo_trans" value="<?php echo $row->kode_saldo_trans?>" step=any>
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
<!-- <script type="text/javascript">
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
            var saldoTotal = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
      $( api.column( 0 ).footer() ).html('Total');
            $( api.column( 6 ).footer() ).html(saldoTotal);
        }
    } );
} );
</script> -->

