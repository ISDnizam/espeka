<?php $pro='';?>
  <div>
  
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#lihat" aria-controls="lihat" role="tab" data-toggle="tab">Lihat Semua Data</a></li>
      <li role="presentation"><a href="#rangking" aria-controls="rangking" role="tab" data-toggle="tab">Perangkingan</a></li>
    </ul>
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="lihat">
        <br/>
        <div class="row">
        <div class="col-md-6 text-left">
          <h4>Data Rangking</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?php echo base_url();?>pages/tambah_rangking" class="btn btn-primary">Tambah Data</a>
        </div>
      </div>
      <br/>
      <table width="100%" class="table table-striped table-bordered" id="tabeldata">
            <thead>
                <tr>
                    <th width="30px">No</th>
                    <th>Kandidat</th>
                    <th>Kriteria</th>
                    <th>Nilai</th>
                    <th width="100px">Aksi</th>
                </tr>
            </thead>
    
            <tbody>
    <?php $no=1;foreach ($list_rangking as $key) {?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $key->nama_kandidat; ?></td>
                    <td><?php echo $key->nama_kriteria; ?></td>
                    <td><?php echo $key->nilai_rangking; ?></td>
                    <td class="text-center">
              <a href="<?php echo base_url();?>pages/edit_rangking?id_kandidat=<?php echo $key->id_kandidat; ?>&id_kriteria=<?php echo $key->id_kriteria; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              <a href="<?php echo base_url();?>pages/hapus_rangking?id_kandidat=<?php echo $key->id_kandidat; ?>&id_kriteria=<?php echo $key->id_kriteria; ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>
                </tr>
    <?php
    }
    ?>
            </tbody>
    
        </table>
            
      </div>

      <div role="tabpanel" class="tab-pane" id="rangking">
        <br/>
       <h4>Normalisasi R Perangkingan</h4>
      <table width="100%" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th rowspan="2" style="vertical-align: middle" class="text-center">Kandidat</th>
                    <th colspan="<?php echo count($list_kriteria); ?>" class="text-center">Kriteria</th>
                    <th rowspan="2" style="vertical-align: middle" class="text-center">Hasil</th>
                </tr>
                <tr>
            <?php foreach ($list_kriteria as $key) {?>
                    <th><?php echo $key->nama_kriteria; ?></th>
                <?php } ?>
                </tr>
            </thead>
    
            <tbody>
            <?php foreach ($list_kandidat as $kandidat) {?>
                <tr>
                    <th><?php echo $kandidat->nama_kandidat; ?></th>
                    <?php
                    $a= $kandidat->id_kandidat;
             foreach ($list_kriteria as $kriteria) {
              $b = $kriteria->id_kriteria;
              $tipe = $kriteria->tipe_kriteria;
              $bobot = $kriteria->bobot_kriteria;
            ?>
              <td>
              <?php 
              if($tipe=='benefit'){
                $stmtmax = get_max($kriteria->id_kriteria);
                 $nor = $rangking[$kandidat->id_kandidat][$kriteria->id_kriteria]->nilai_rangking/$stmtmax->nilai_max;
              } else{
                $stmtmin =  get_min($kriteria->id_kriteria);
                 $nor = $stmtmin->nilai_min/$rangking[$kandidat->id_kandidat][$kriteria->id_kriteria]->nilai_rangking;
              }
              echo $nor;
              $hs = $bobot*$nor;
               normalisasi($a, $b, $nor, $hs);
               ?>
                    </td>
              <?php } ?>
            <td>
              <?php echo $rangking[$kandidat->id_kandidat][$kriteria->id_kriteria]->bobot_normalisasi; ?>
            </td>
                </tr>
            <?php } ?>
    
        </table>
          
      </div>
    </div>
  
  </div>
