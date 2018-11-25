		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-4">
		  	<div class="page-header">
			  <h5>Nilai Preferensi</h5>
			</div>
			<div class="panel panel-default">
			  <div class="panel-body">
			    <ol>
			    	<?php foreach ($list_nilai as $key) { ?>
				  	<li><?php echo $key->ket_nilai; ?> (<?php echo $key->jum_nilai; ?>)</li>
				  	<?php } ?>
				</ol>
			  </div>
			</div>
		  </div>
		  <div class="col-xs-12 col-sm-12 col-md-4">
		  	<div class="page-header">
			  <h5>Kriteria</h5>
			</div>
			<div class="panel panel-default">
			  <div class="panel-body">
			    <ol class="list-unstyled">
			    	<?php foreach ($list_kriteria as $key) { ?>
				  	<li> <?php echo $key->nama_kriteria; ?></li>
				  	<?php } ?>
				</ol>
			  </div>
			</div>
		  </div>
		  <div class="col-xs-12 col-sm-12 col-md-4">
		  	<div class="page-header">
			  <h5>Kandidat</h5>
			</div>
			<div class="panel panel-default">
			  <div class="panel-body">
			    <ol>
			    	<?php foreach ($list_kandidat as $key) { ?>
				  	<li> <?php echo $key->nama_kandidat; ?></li>
				  	<?php } ?>
				</ol>
			  </div>
			</div>
		  </div>
		</div>
		<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

		</div>

