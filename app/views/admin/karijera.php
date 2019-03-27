  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Karijera
        <small><?php echo "Korisnik: " .Session::get("username"); ?>  </small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">       
            
            <!-- /.box-header -->
            <div class="box-body">
      
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="background-color:#2BAFA7; color:#fff">Redni broj</th>
                  <th style="background-color:#2BAFA7; color:#fff">Naslov</th>
                  <th style="background-color:#2BAFA7; color:#fff">Pocetak konkursa</th>                  
                  <th style="background-color:#2BAFA7; color:#fff">Zavrsetak konkursa</th>
                  <th style="background-color:#2BAFA7; color:#fff">Status konkursa</th>
                  <th style="background-color:#2BAFA7; color:#fff">Izmijeni</th>
                  <th style="background-color:#2BAFA7; color:#fff">Opcija deaktiviraj</th>
                  <th style="background-color:#2BAFA7; color:#fff">Izbrisi</th>
                 
                </tr>
                </thead>

                <tbody>
<?php 
        if(isset($karijera)){
          foreach ($karijera as $key => $value) {           
          
?>
                <tr>
                   <td><?php echo $value['karijera_id']; ?></td>
                   <td><?php echo $value['karijera_naslov']; ?></td>
                   <td><?php echo $value['karijera_pocetak']; ?></td>
                   <td><?php echo $value['karijera_kraj']; ?></td>
                   <td><?php echo $value['karijera_status']; ?></td>                     
                   <td><a href="<?php echo BASE_URL; ?>/editKarijera/editKarijera/<?php echo $value['karijera_id'] ?>">Izmijeni</td> 
                   <td><a href="<?php echo BASE_URL; ?>/editKarijera/deaktiviraj/<?php echo $value['karijera_id'] ?>">Deaktiviraj status</a></td>                               
                   <td><a href='<?php echo BASE_URL; ?>/deleteKarijera/deleteKarijera/<?php echo $value['karijera_id'] ?>'>Izbrisi</td>
                  </tr>
<?php } } ?>
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 


     
</div>
    
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    

    
  </div>
  <!-- /.content-wrapper -->


  <!-- footer -->






