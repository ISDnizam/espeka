  <div class="row">
    <div class="col-md-6 text-left">
      <h4><?php echo $title;?></h4>
    </div>
    <div class="col-md-6 text-right">
      <a href="<?php echo base_url();?>pages/tambah_nilai" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
  <br/>
  <table width="100%" class="table table-striped table-bordered" id="tabeldata">
    <thead>
      <tr>
        <th width="30px">No</th>
        <th>Keterangan Nilai</th>
        <th>Jumlah Nilai</th>
        <th width="100px">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach ($list as $key) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->ket_nilai; ?></td>
          <td><?php echo $key->jum_nilai; ?></td>
          <td class="text-center">
            <a href="<?php echo base_url();?>pages/edit_nilai/<?php echo $key->id_nilai; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            <a href="<?php echo base_url();?>pages/hapus_nilai/<?php echo $key->id_nilai; ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>    
