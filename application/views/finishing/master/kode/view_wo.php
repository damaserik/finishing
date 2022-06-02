<br><br><br><br>
<div class="container">
  <div class="row">
      <div class="col-md-10 col-sm-9">
        <h3>WO / Pemilik</h3>
      </div>
  </div>
  <br>
  <div class="row">
      <div class="col-md-4"> 
          <div class="card-header">
            <h5 class="card-title">Form Tambah WO / Pemilik</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <?php echo validation_errors();?>
                <?php echo form_open('master/kode/simpan_wo');?>
                    <div class="form-group">
                      <label>Kode</label>
                      <input class="form-control form-control-sm" type="text" name="kode_wo" required="" autocomplete="off" autofocus="">
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input class="form-control form-control-sm" type="text" name="nama_wo" required="" autocomplete="off" autofocus="">
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
            <h5 class="card-title">Data WO / Pemilik</h5>
          </div>
          <br>
      <table id="myTable" class="table table-sm table-bordered" style="width:100%">
          <thead class="thead-dark">
              <tr>
                  <th>Kode WO</th>
                  <th>WO / Pemilik</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($isi as $row) { ?>         
              <tr>
                  <td><?php echo $row->kode_wo?></td>
                  <td><?php echo $row->nama_wo?></td>
                  <td class="project-actions text-center">
                      <!-- <a  title="Cetak" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-print fa-sm"></i></a>&nbsp; -->
                      <!-- <a  title="Detail Nota" href="<?php echo site_url('#'.$row->kode_brg)?>"><i class="fas fa-align-justify fa-sm"></i></a>&nbsp; -->
                      <a title="Edit" href="<?php echo site_url('master/kode/edit_wo/'.$row->kode_wo)?>"><i class="fas fa-pencil-alt fa-sm"></i></a>&nbsp;
                      <a  title="Hapus" href="<?php echo site_url('master/kode/hapus_wo/'.$row->kode_wo)?>" onclick="return confirm('Konfirmasi Hapus Data ?')"><i class="fas fa-trash fa-sm"></i></a></td>
              </tr>
              <?php } ?> 
      </table>
    </div>
  </div>
</div>
<br><br><br><br>
