<footer class="text-center">&copy; 2018</footer>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
    <script src="<?php echo base_url();?>assets/js/exporting.js"></script>
    <script>
      $(document).ready(function() {
        $('#tabeldata').DataTable();
    });
<?php if(!empty($list_kandidat)){ ?>
  var chart1; // globally available
  $(document).ready(function() {
        chart1 = new Highcharts.Chart({
           chart: {
              renderTo: 'container2',
              type: 'column'
           },  
           title: {
              text: 'Grafik Perangkingan '
           },
           xAxis: {
              categories: ['Kandidat']
           },
           yAxis: {
              title: {
                 text: 'Jumlah Nilai'
              }
           },
                series:            
              [
            <?php foreach ($list_kandidat as $key) { ?>
                    {
                        name: '<?php echo $key->nama_kandidat; ?>',
                        data: [<?php echo $key->hasil_kandidat; ?>]
                    },
                    <?php } ?>
              ]
        });
     });  
<?php } ?>
    </script>
  </body>
</html>