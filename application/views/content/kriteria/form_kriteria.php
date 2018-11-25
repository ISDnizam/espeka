    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="page-header">
        <h5><?php echo $title;?></h5>
      </div>
      
          <form method="post">
            <input type="hidden" name="id_kriteria" value="<?php if(!empty($edit)){ echo $edit->id_kriteria; }?>">
          <div class="form-group">
            <label for="kt">Nama Kriteria</label>
            <input type="text" class="form-control" id="kt" name="kriteria[nama_kriteria]"  value="<?php if(!empty($edit)){ echo $edit->nama_kriteria; }?>" required>
          </div>
          <div class="form-group">
            <label for="tp">Tipe Kriteria</label>
            <select class="form-control" id="tp" name="kriteria[tipe_kriteria]" >
              <option value='benefit'  <?php if(!empty($edit)){ if($edit->tipe_kriteria=='benefit') { echo 'selected'; } } ?>>Benefit</option>
              <option value='cost'  <?php if(!empty($edit)){ if($edit->tipe_kriteria=='cost') { echo 'selected'; } } ?>>Cost</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jm">Bobot Kriteria</label>
            <select class="form-control" id="jm" name="kriteria[bobot_kriteria]">
            <?php foreach ($list_nilai as $key) { ?>
              <option value='<?php echo $key->jum_nilai;?>' <?php if(!empty($edit)){ if($edit->bobot_kriteria==$key->jum_nilai) { echo 'selected'; } } ?>><?php echo $key->jum_nilai;?></option>
            <?php } ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
    </div>
