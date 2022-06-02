<br><br><br>
<div class="col-md-12" style="font-size: 11pt;">
  <form method="POST" action="<?php echo site_url('cambric/camfolding/view_tgl/');?>">
  <div class="row">
    <div class="col-md-9 col-sm-9">
      <h3>Data Folding</h3>
    </div>   
    <div class="col-md-1">
        <div class="form-group">
        <?php foreach ($isi as $row) { ?> 
        <input type="date" id="test" class="form-control form-control-sm" style="width: 80pt;" name="tgl_fold" value="<?php echo $row->tgl_folding?>" hidden="">
        <?php } ?> 
        </div>
    </div>
    <div class="col-md-1">
<!--       <a href="#"> <button name="action" type="submit" id="previous_day" data-diff="-1" class="fas fa-step-backward btn-dark btn-sm" style="height: 23pt;"></button></a>
      <a href="#"> <button name="action" type="submit" id="next_day" data-diff="1" class="fas fa-step-forward btn-dark btn-sm" style="height: 23pt;"></button></a> -->
    </div> 
     <div class="col-md-1 col-sm-3">
      <a href="<?php echo site_url('cambric/camfolding/tambah_folding');?>"><button type="button" class="btn btn-dark btn-block btn-sm">Kembali</button></a>
    </div> 
  </div>
  </form>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
<!--             <?php foreach($sum as $su) { ?>
              <tr>
                  <th colspan="6" align="right">Total</th>
                  <th><?php echo $su->total_cutting?></th>
                  <th><?php echo $su->total_sisa?></th>
                  <th><?php echo $su->total_folding?></th>
                  <th colspan="4"></th>
              </tr> 

              <?php } ?>  -->
              <tr>
                  <th>No Order PP</th>
                  <th>Tanggal</th>
                  <th>Barang</th>
                  <th>Kode WO</th>
                  <th>No Gulung</th>
                  <th>Gulung</th>
                  <th>Cutting</th>
                  <th>Sisa</th>
                  <th>Jumlah</th>
                  <th>Group</th>
                  <th>Jenis</th>
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
                  <th></th>
                  <th></th>
                  <th></th>
              </tr>
          </tfoot>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->no_orderppcmb?></td>
                  <td><?php echo $row->tgl_folding?></td>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->kode_wo?></td>
                  <td><?php echo $row->no_gulfold?></td>
                  <td><?php echo $row->gulung_folding?></td>
                  <td><?php echo $row->cutting?></td>
                  <td><?php echo $row->sisa?></td>
                  <td><?php echo $row->folding?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->kel?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                     <!--  <a title="Edit" href="<?php echo site_url('cambric/camfolding/edit_folding/'.$row->kode_dtl_folding)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp; -->
                      <a data-toggle="modal" data-target="#ubah_cmb<?php echo $row->kode_dtl_folding?>" title="Edit" href=""><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <a title="Hapus" href="<?php echo site_url('cambric/camfolding/hapus_folding/'.$row->kode_dtl_folding)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a>
                      <!-- Modal Form -->
                          <div class="modal fade" id="ubah_cmb<?php echo $row->kode_dtl_folding?>">
                              <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Folding</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><?php $id = $row->kode_dtl_folding?>
                                        <?php echo form_open('cambric/camfolding/view_fold/'.$id);?>
                                        <div class="form-row">
                                            <div class="col-md-4" hidden="">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Kode Detail</label>
                                                <input type="text" class="form-control form-control-sm" name="kode_dtl_folding" value="<?php echo $row->kode_dtl_folding?>" readonly="">
                                              </div>  
                                            </div>  
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">No Order PP</label>
                                                <input type="text" class="form-control form-control-sm" name="no_orderppcmb" value="<?php echo $row->no_orderppcmb?>" required="" readonly="">
                                              </div>  
                                            </div>       
                                            <div class="col-md-8">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Nama Barang</label>
                                                <input type="text" class="form-control form-control-sm" name="nama_brg" value="<?php echo $row->nama_brg?>" required="" readonly="">
                                              </div>  
                                            </div>
                                        </div>
                                        <div class="form-row">            
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">No Gulung</label>
                                                <input type="number" class="form-control form-control-sm" name="no_gulfold" value="<?php echo $row->no_gulfold?>" step=any>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Gulung</label>
                                                <input type="number" class="form-control form-control-sm" name="gulung_folding" value="<?php echo $row->gulung_folding?>" step=any required="">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-row">    
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Cutting</label>
                                                <input type="number" class="form-control form-control-sm" name="cutting" id="cutting" value="<?php echo $row->cutting?>" step=any required="">
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Sisa</label>
                                                <input type="number" class="form-control form-control-sm" name="sisa" id="sisa" value="<?php echo $row->sisa?>" step=any required="">
                                              </div>
                                            </div>                                            
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Jumlah</label>
                                                <input type="number" class="form-control form-control-sm" name="folding" id="folding" value="<?php echo $row->folding?>" step=any required="">
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
                              <!-- /.SCRIPT HITUNG JUMLAH FOLDING -->
                              <script type="text/javascript">
                                $(document).ready(function(){
                                   $("#sisa").keyup(function(){ 
                                   var cutting = parseFloat($("#cutting").val());
                                   var sisa = parseFloat($("#sisa").val());
                                   var folding = parseFloat(cutting + sisa);
                                   $("#folding").val(folding); 
                                   })
                              })
                              </script>
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
            var cuttingTotal = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
            var sisaTotal = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
            var foldingTotal = api
                .column( 8 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
      $( api.column( 0 ).footer() ).html('Total');
            $( api.column( 6 ).footer() ).html(cuttingTotal);
            $( api.column( 7 ).footer() ).html(sisaTotal);
            $( api.column( 8 ).footer() ).html(foldingTotal);
        }
    } );
              var picker = $('#test').pickadate({
                format: 'yyyy-mm-dd'
              }).pickadate('picker');

              $('#previous_day, #next_day').click(function(e) {
                e.preventDefault();
                setDate($(this).data('diff'));
              })

              function setDate(diff) {
                var date = new Date(picker.get('select').pick);
                var newDate = date.setDate(date.getDate() + diff);
                picker.set('select', newDate)
              }

} );
</script>
