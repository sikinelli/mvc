  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proizvodi
        <small><?php echo "Korisnik: " .Session::get("username"); ?>   </small>
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
                  <th style="background-color:#2BAFA7; color:#fff">Naziv</th>
                  <th style="background-color:#2BAFA7; color:#fff">Datum unosa</th>                  
                  <th style="background-color:#2BAFA7; color:#fff">Izmijeni</th>
                  <th style="background-color:#2BAFA7; color:#fff">Opcija deaktiviraj</th>
                  <th style="background-color:#2BAFA7; color:#fff">Izbrisi</th>
                 
                </tr>
                </thead>

                <tbody>
<?php 
        if(isset($proizvod)){
          foreach ($proizvod as $key => $value) {           
          
?>
                <tr>
                   <td><?php echo $value['proizvod_id']; ?></td>
                   <td><?php echo $value['proizvod_naziv']; ?></td>
                   <td><?php echo $value['proizvod_datum']; ?></td>                   
                   <td><a href="<?php echo BASE_URL; ?>/editProizvod/editProizvod/<?php echo $value['proizvod_id'] ?>">Izmijeni</td> 
                   <td><a href="<?php echo BASE_URL; ?>/editProizvod/deaktiviraj/<?php echo $value['proizvod_id'] ?>"><?php echo $value['proizvod_status']; ?></a> <- Klik za deaktivaciju</td>                               
                   <td><a href='<?php echo BASE_URL; ?>/deleteProizvod/deleteProizvod/<?php echo $value['proizvod_id'] ?>'>Izbrisi</td>
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






