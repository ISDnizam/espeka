  
    <div id="container" class="container">

  <div>
  
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#rangking" aria-controls="rangking" role="tab" data-toggle="tab">Laporan Perangkingan</a></li>
      <li role="presentation" style="cursor: pointer;"><a onclick="window.print()" role="tab">Cetak Laporan</a></li>
    </ul>
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="rangking">
        <br/>
        <h4>Nilai Kriteria Kandidat</h4>
   <table width="100%" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th rowspan="2" style="vertical-align: middle" class="text-center">Kandidat</th>
                    <th colspan="<?php echo count($list_kriteria); ?>" class="text-center">Kriteria</th>
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
                      $bobot = $kriteria->bobot_kriteria;  ?>
                      <td>
                      <?php echo $rangking[$kandidat->id_kandidat][$kriteria->id_kriteria]->nilai_rangking; ?>
                      </td>
                    <?php } ?>
                </tr>
            <?php } ?>
    
        </table>
        <h4>Normalisasi R</h4>
      <table width="100%" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th rowspan="2" style="vertical-align: middle" class="text-center">Kandidat</th>
                    <th colspan="<?php echo count($list_kriteria); ?>" class="text-center">Kriteria</th>
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
                    foreach ($list_kriteria as $kriteria) { ?>
                    <td>
                      <?php echo $rangking[$kandidat->id_kandidat][$kriteria->id_kriteria]->nilai_normalisasi; ?>
                    </td>
                    <?php
                    }
            ?>
                </tr>
    <?php } ?>
    <tr>
      <td><b>Bobot</b></td>
                <?php foreach ($list_kriteria as $key) {?>
                    <td><b><?php echo $key->bobot_kriteria; ?></b></td>
                <?php  }  ?>
                </tr>
            </tbody>
    
        </table>

   <h4>Hasil Akhir</h4>
      <table width="100%" id="table-akhir" class="table table-striped table-bordered">
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
                   <?php  foreach ($list_kriteria as $kriteria) { ?>
                    <td>
                      <?php echo $rangking[$kandidat->id_kandidat][$kriteria->id_kriteria]->bobot_normalisasi; ?>
                    </td>
                    <?php }  ?>
            <td>
              <?php 
              echo $kandidat->hasil_kandidat;
              ?>
            </td>
                </tr>
    <?php } ?>
            </tbody>
    
        </table>
          