    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="page-header">
        <h5><?php echo $title;?></h5>
      </div>
      
          <form method="post">
            <input type="hidden" name="id_karyawan" value="<?php if(!empty($edit)){ echo $edit->id_karyawan; }?>">
            <input type="hidden" name="id_kriteria" value="<?php if(!empty($edit)){ echo $edit->id_kriteria; }?>">
          <div class="form-group">
             <label for="tp">karyawan</label>
            <select class="form-control" id="tp" name="rangking[id_karyawan]" >
               <?php foreach ($list_karyawan as $key) { ?>
              <option value='<?php echo $key->id_karyawan;?>' <?php if(!empty($edit)){ if($edit->id_karyawan==$key->id_karyawan) { echo 'selected'; } } ?>><?php echo $key->nama_karyawan;?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tp"> Kriteria</label>
            <select class="form-control" id="tp" name="rangking[id_kriteria]" >
               <?php foreach ($list_kriteria as $key) { ?>
              <option value='<?php echo $key->id_kriteria;?>' <?php if(!empty($edit)){ if($edit->id_kriteria==$key->id_kriteria) { echo 'selected'; } } ?>><?php echo $key->nama_kriteria;?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jm">Nilai</label>
            <select class="form-control" id="jm" name="rangking[nilai_rangking]">
            <?php foreach ($list_nilai as $key) { ?>
              <option value='<?php echo $key->jum_nilai;?>' <?php if(!empty($edit)){ if($edit->nilai_rangking==$key->jum_nilai) { echo 'selected'; } } ?>><?php echo $key->ket_nilai;?></option>
            <?php } ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
    </div>
