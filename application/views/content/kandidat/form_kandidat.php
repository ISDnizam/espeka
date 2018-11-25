    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="page-header">
        <h5><?php echo $title;?></h5>
        </div>
          <form method="post">
          <div class="form-group">
            <label for="kt">Nama Kandidat</label>
            <input type="hidden" name="id_kandidat" value="<?php if(!empty($edit)){ echo $edit->id_kandidat; }?>">
            <input type="text" class="form-control" id="kt" name="kandidat[nama_kandidat]"  value="<?php if(!empty($edit)){ echo $edit->nama_kandidat; }?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
    </div>
