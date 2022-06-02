<br><br><br>
<div class="col-md-12" style="font-size: 11pt;">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h3>Input Grey Dikerjakan/Diretur</h3>
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
                  <!-- <th>Tgl Terima</th> -->
                  <th>Kain Luar/WO</th>
                  <th>Kode WO</th>
                  <th>Barang</th>
                  <th>Gulung</th>
                  <th>Terima</th>
                  <th>Tgl Terima</th>
                  <th>Tgl Proses</th>
                  <th>Proses</th>
                  <th>Return</th>
                  <th>Jenis</th>
                  <th>Kel</th>
                  <th>Group</th>
                  <th>Aksi</th>
              </tr>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th colspan="4" style="text-align:left">Total</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
              </tr>
          </tfoot>
          <tbody>
              <?php $no ='0'; foreach ($isi as $row) { $no++;?>         
              <tr>
                  <!-- <td><?php echo $row->no_ordergry?></td> -->
                  <td><?php echo $row->no_orderpp?></td>
                  <!-- <td><?php echo $row->tgl_dtl_order?></td> -->
                  <td><?php echo $row->kain_luar?></td>
                  <td><?php echo $row->kode_wo?></td>
                  <td><?php echo $row->nama_brg?></td>
                  <td><?php echo $row->gulung?></td>
                  <td><?php echo $row->terima?></td>
                  <td><?php echo $row->tgl_dtl_order?></td>
                  <td><?php echo $row->tgl_proses?></td>
                  <td><?php echo $row->yard_proses?></td>
                  <td><?php echo $row->return?></td> 
                  <td><?php echo $row->nama_jenis?></td>
                  <td><?php echo $row->kel?></td>
                  <td><?php echo $row->nama_group?></td>
                  <td class="project-actions text-center">
                      <!-- <<a title="Edit" href="<?php echo site_url('grey/greydkrj/edit_greydkrj/'.$row->kode_detail)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;  -->
                      <a data-toggle="modal" data-target="#ubah_grydkrj<?php echo $row->kode_detail?>" title="Proses / Retur?" href=""><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                          <div class="modal fade" id="ubah_grydkrj<?php echo $row->kode_detail?>">
                              <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Input Grey Dikerjakan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><?php $id = $row->kode_detail?>
                                        <?php echo form_open('grey/greydkrj/view_grydkrj/'.$id);?>
                                        <div class="form-row">
                                            <div class="col-md-4" hidden="">
                                            <div class="form-group">
                                              <label style="font-size: 11pt;">Kode Detail</label>
                                              <input type="text" class="form-control form-control-sm" name="kode_detail" value="<?php echo $row->kode_detail?>" readonly="">
                                            </div>  
                                          </div>  
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label style="font-size: 11pt;">No Order PP</label>
                                              <input type="text" class="form-control form-control-sm" name="no_orderpp" value="<?php echo $row->no_orderpp?>" required="" readonly="">
                                            </div>  
                                          </div>                 
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Gulung</label>
                                                <input type="number" class="form-control form-control-sm" name="gulung" value="<?php echo $row->gulung?>" step=any required="" readonly="">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Terima/Yard</label>
                                                <input type="number" class="form-control form-control-sm" name="terima" value="<?php echo $row->terima?>" step=any required="" readonly="">
                                              </div>
                                          </div>   
                                          <div class="col-md-12">
                                              <hr style="border: 0,5px solid grey;">
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="col-md-4" align="right" style="margin-top: 3px;">
                                            <div class="form-group">
                                              <label style="font-size: 11pt;"><i><b>Tgl Proses</b></i></label>
                                            </div>  
                                          </div>
                                          <div class="col-md-4" align="right">
                                            <div class="form-group">
                                              <input class="form-control form-control form-control-sm" type="date" name="tgl_proses" required="" autocomplete="off" value="<?php echo date('Y-m-d');?>" required="">
                                            </div>  
                                          </div>
                                        </div>
                                        <div class="form-row">  
                                          <div class="col-md-4" align="right" style="margin-top: 33px;">
                                            <div class="form-group">
                                              <label style="font-size: 11pt;"><i><b>Proses/Dikerjakan</b></i></label>
                                              <input type="text" class="form-control form-control-sm" name="kode_proses_trans" value="2" required="" readonly="" hidden="">
                                            </div>  
                                          </div>                 
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Gulung</label>
                                                <input type="number" class="form-control form-control-sm" name="gulung_proses" value="<?php echo $row->gulung_proses?>" step=any required="">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Dikerjakan/Yard</label>
                                                <input type="number" class="form-control form-control-sm" name="yard_proses" value="<?php echo $row->yard_proses?>" step=any required="">
                                              </div>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="col-md-4" align="right" style="margin-top: 34px;">
                                            <div class="form-group">
                                              <input type="checkbox" name="cek2" id="cek2<?php echo $no;?>"><i><b> Direturn</b></i>
                                              <input type="text" class="form-control form-control-sm" name="kode_return_trans" value="3" required="" readonly="" hidden="">
                                            </div>  
                                          </div>   
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Gulung</label>
                                                <input type="number" class="form-control form-control-sm" name="gulung_return" id="gulung_return<?php echo $no;?>" value="<?php echo $row->gulung_return?>" step=any disabled>
                                              </div>
                                          </div>              
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                <label style="font-size: 11pt;">Return/Yard</label>
                                                <input type="number" class="form-control form-control-sm" name="return" id="return<?php echo $no;?>" value="<?php echo $row->return?>" step=any disabled>
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

                              <!-- /.SCRIPT CHECKBOX -->
                              <script type="text/javascript">
                                $(document).ready(function(){
                              $('body').on('change', '#cek2<?php echo $no;?>', function() {
                                // checking if it is checked
                                if (this.checked === true) {
                                  $('#gulung_return<?php echo $no;?>').attr("disabled", false);
                                  $('#return<?php echo $no;?>').attr("disabled", false);
                                } else {
                                  $('#gulung_return<?php echo $no;?>').attr("disabled", true);
                                  $('#return<?php echo $no;?>').attr("disabled", true);
                                }

                              })
                              })
                                $(document).ready(function(){
                                   $("#embuh").keyup(function(){ 
                                   var gulung = parseFloat($("#gulung").val());
                                   var terima = parseFloat($("#terima").val());
                                   var proses = parseFloat($("#proses").val());
                                   var return = parseFloat($("#return").val());
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
            var gulungTotal = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
            var terimaTotal = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
            var prosesTotal = api
                .column( 8 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

             var returnTotal = api
                .column( 9 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );               
            // Update footer by showing the total with the reference of the column index 
      $( api.column( 0 ).footer() ).html('Total');
            $( api.column( 4 ).footer() ).html(gulungTotal);
            $( api.column( 5 ).footer() ).html(terimaTotal);
            $( api.column( 8 ).footer() ).html(prosesTotal);
            $( api.column( 9 ).footer() ).html(returnTotal);
        }
    } );
              // var picker = $('#test').pickadate({
              //   format: 'yyyy-mm-dd'
              // }).pickadate('picker');

              // $('#previous_day, #next_day').click(function(e) {
              //   e.preventDefault();
              //   setDate($(this).data('diff'));
              // })

              // function setDate(diff) {
              //   var date = new Date(picker.get('select').pick);
              //   var newDate = date.setDate(date.getDate() + diff);
              //   picker.set('select', newDate)
              // }

} );
</script>
