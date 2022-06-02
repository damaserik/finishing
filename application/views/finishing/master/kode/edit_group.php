<br><br><br><br>
<div class="container">
  <div class="row">
      <div class="col-md-10 col-sm-9">
        <h3>Group</h3>
      </div>
  </div>
  <br>
  <div class="row">
      <div class="col-md-4"> 
          <div class="card-header">
            <h5 class="card-title">Form Edit Group</h5>
          </div>
          <div class="card-body">
                <?php foreach ($ubah_data as $key => $row): ?>  
                 <form method="POST" action="<?php echo site_url('master/kode/group_edit/'.$row->kode_group)?>">
                <div class="row">
                  <div class="col-md-12">
                        <div class="form-group" hidden="">
                          <label>Kode</label>
                          <input class="form-control form-control-sm" type="text" name="kode_group" required="" autocomplete="off" autofocus="" value="<?php echo $row->kode_group?>">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 11pt;">group</label>
                          <input class="form-control form-control-sm" type="text" name="nama_group" required="" autocomplete="off" autofocus="" value="<?php echo $row->nama_group?>">
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
