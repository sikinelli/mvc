  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profil
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
                  <th style="background-color:#2BAFA7; color:#fff">Ime</th>
                  <th style="background-color:#2BAFA7; color:#fff">Prezime</th>
                  <th style="background-color:#2BAFA7; color:#fff">Pozicija u firmi</th>                  
                  <th style="background-color:#2BAFA7; color:#fff">Korisnicko ime</th>
                  <th style="background-color:#2BAFA7; color:#fff">Lozinka</th>                 
                 
                </tr>
                </thead>

                <tbody>
<?php 
        if(isset($korisnik)){
          foreach ($korisnik as $key => $value) {           
          
?>
                <tr>
                   
                   <td><?php echo $value['user_firstname']; ?></td>                                  
                   <td><?php echo $value['user_lastname']; ?></td>
                   <td><?php echo $value['user_status']; ?></a></td>
                   <td><?php echo $value['username']; ?></td> 
                   <td><?php echo $value['password']; ?><a href="<?php echo BASE_URL; ?>/editKorisnik/editLozinka/<?php echo $value['user_id'] ?>"> | Izmijeni lozinku</td>                                         
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






