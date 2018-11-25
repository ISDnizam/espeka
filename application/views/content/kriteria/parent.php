  <div class="row">
    <div class="col-md-6 text-left">
      <h4><?php echo $title;?></h4>
    </div>
    <div class="col-md-6 text-right">
      <a href="<?php echo base_url();?>pages/tambah_kriteria" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
  <br/>
  <table width="100%" class="table table-striped table-bordered" id="tabeldata">
    <thead>
      <tr>
        <th width="30px">No</th>
        <th>Nama Kriteria</th>
        <th>Tipe Kriteria</th>
        <th>Bobot Kriteria</th>
        <th width="100px">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach ($list as $key) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->nama_kriteria; ?></td>
          <td><?php echo $key->tipe_kriteria; ?></td>
          <td><?php echo $key->bobot_kriteria; ?></td>
          <td class="text-center">
          <a href="<?php echo base_url();?>pages/edit_kriteria/<?php echo $key->id_kriteria; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a href="<?php echo base_url();?>pages/hapus_kriteria/<?php echo $key->id_kriteria; ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>    
