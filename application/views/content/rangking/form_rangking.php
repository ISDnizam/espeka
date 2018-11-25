    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="page-header">
        <h5><?php echo $title;?></h5>
      </div>
      
          <form method="post">
            <input type="hidden" name="id_kandidat" value="<?php if(!empty($edit)){ echo $edit->id_kandidat; }?>">
            <input type="hidden" name="id_kriteria" value="<?php if(!empty($edit)){ echo $edit->id_kriteria; }?>">
          <div class="form-group">
             <label for="tp">Kandidat</label>
            <select class="form-control" id="tp" name="rangking[id_kandidat]" >
               <?php foreach ($list_kandidat as $key) { ?>
              <option value='<?php echo $key->id_kandidat;?>' <?php if(!empty($edit)){ if($edit->id_kandidat==$key->id_kandidat) { echo 'selected'; } } ?>><?php echo $key->nama_kandidat;?></option>
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
