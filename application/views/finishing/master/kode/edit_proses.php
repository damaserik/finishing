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
            <h5 class="card-title">Form Edit Proses</h5>
          </div>
          <div class="card-body">
                <?php foreach ($ubah_data as $key => $row): ?>  
                 <form method="POST" action="<?php echo site_url('master/kode/proses_edit/'.$row->kode_proses)?>">
                <div class="row">
                  <div class="col-md-12">
                        <div class="form-group" hidden="">
                          <label>Kode</label>
                          <input class="form-control form-control-sm" type="text" name="kode_proses" required="" autocomplete="off" autofocus="" value="<?php echo $row->kode_proses?>">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11pt;">Proses</label>
                          <input class="form-control form-control-sm" type="text" name="kel" required="" autocomplete="off" autofocus="" value="<?php echo $row->kel?>">
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary btn-sm float-right toaster" value="Simpan">
                        </div>
                    </form>
                <?php endforeach ?>
                </div>
              </div>         
            </div>
        </div>
  </div>
</div>
<br><br><br><br>
