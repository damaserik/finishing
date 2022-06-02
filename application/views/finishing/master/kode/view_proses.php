<br><br><br><br>
<div class="container">
  <div class="row">
      <div class="col-md-10 col-sm-9">
        <h3>Proses</h3>
      </div>
  </div>
  <br>
  <div class="row">
      <div class="col-md-4"> 
          <div class="card-header">
            <h5 class="card-title">Form Tambah Proses</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <?php echo validation_errors();?>
                <?php echo form_open('master/kode/simpan_proses');?>
                    <div class="form-group">
                      <label>Kode</label>
                      <input class="form-control form-control-sm" type="text" name="kode_proses" value="<?php echo $kode ?>"required="" autocomplete="off" readonly="">
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input class="form-control form-control-sm" type="text" name="kel" required="" autocomplete="off" autofocus="">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-sm float-right toaster" value="Simpan">
                    </div>
                </form>
                </div>
              </div>         
            </div>
        </div>
      <div class="col-md-8">
          <div class="card-header">
            <h5 class="card-title">Data Proses</h5>
          </div>
          <br>
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>Kode Proses</th>
                  <th>Proses</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->kode_proses?></td>
                  <td><?php echo $row->kel?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                      <a title="Edit" href="<?php echo site_url('master/kode/edit_proses/'.$row->kode_proses)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <a  title="Hapus" href="<?php echo site_url('master/kode/hapus_Proses/'.$row->kode_proses)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a></td>
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
<br><br><br><br>
