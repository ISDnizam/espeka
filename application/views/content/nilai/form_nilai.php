    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8">
<!--         <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="nilai.php">lihat semua data</a>.
        </div>
 -->
        <div class="page-header">
        <h5><?php echo $title;?></h5>
        </div>
          <form method="post">
          <div class="form-group">
            <label for="kt">Keterangan Nilai</label>
            <input type="hidden" name="id_nilai" value="<?php if(!empty($edit)){ echo $edit->id_nilai; }?>">
            <input type="text" class="form-control" id="kt" name="nilai[ket_nilai]"  value="<?php if(!empty($edit)){ echo $edit->ket_nilai; }?>" required>
          </div>
          <div class="form-group">
            <label for="jm">Jumlah Nilai</label>
            <input type="text" class="form-control" id="jm" name="nilai[jum_nilai]"  value="<?php if(!empty($edit)){ echo $edit->jum_nilai; }?>" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
      </div>
    </div>
