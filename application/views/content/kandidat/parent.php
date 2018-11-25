  <div class="row">
    <div class="col-md-6 text-left">
      <h4><?php echo $title;?></h4>
    </div>
    <div class="col-md-6 text-right">
      <a href="<?php echo base_url();?>pages/tambah_kandidat" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
  <br/>
  <table width="100%" class="table table-striped table-bordered" id="tabeldata">
    <thead>
      <tr>
        <th width="30px">No</th>
        <th>Nama Kandidat</th>
        <th>Hasil Kandidat</th>
        <th width="100px">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach ($list as $key) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key->nama_kandidat; ?></td>
          <td><?php echo $key->hasil_kandidat; ?></td>
          <td class="text-center">
            <a href="<?php echo base_url();?>pages/edit_kandidat/<?php echo $key->id_kandidat; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            <a href="<?php echo base_url();?>pages/hapus_kandidat/<?php echo $key->id_kandidat; ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>    
