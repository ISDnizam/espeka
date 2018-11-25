    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="page-header">
        <h5><?php echo $title;?></h5>
        </div>
          <form method="post">
          <div class="form-group">
            <label for="kt">Nama karyawan</label>
            <input type="hidden" name="id_karyawan" value="<?php if(!empty($edit)){ echo $edit->id_karyawan; }?>">
            <input type="text" class="form-control" id="kt" name="karyawan[nama_karyawan]"  value="<?php if(!empty($edit)){ echo $edit->nama_karyawan; }?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
    </div>
