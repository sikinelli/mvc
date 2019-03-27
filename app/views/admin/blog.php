  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog
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
                  <th style="background-color:#2BAFA7; color:#fff">Naslov bloga</th>
                  <th style="background-color:#2BAFA7; color:#fff">Datum unosa bloga</th>
                  <th style="background-color:#2BAFA7; color:#fff">Kreator bloga</th>
                  <th style="background-color:#2BAFA7; color:#fff">Izmijeni</th>
                  <th style="background-color:#2BAFA7; color:#fff">Opcija deaktiviraj</th>
                  <th style="background-color:#2BAFA7; color:#fff">Izbrisi</th>
                 
                </tr>
                </thead>

                <tbody>
<?php 
        if(isset($blog)){
          foreach ($blog as $key => $value) {           
          
?>
                <tr>
                   <td><?php echo $value['blog_id']; ?></td>
                   <td><?php echo $value['blog_naslov']; ?></td>
                   <td><?php echo $value['blog_datum']; ?></td>
                   <td><?php echo $value['blog_autor']; ?></td>
                   <td><a href="<?php echo BASE_URL; ?>/editBlog/editBlog/<?php echo $value['blog_id'] ?>">Izmijeni</td>
                   <td><a href="<?php echo BASE_URL; ?>/editBlog/deaktiviraj/<?php echo $value['blog_id'] ?>"><?php echo $value['blog_status']; ?></a> <- Klik za deaktivaciju</td>               
                   <td><a href='<?php echo BASE_URL; ?>/deleteBlog/deleteBlog/<?php echo $value['blog_id'] ?>'>Izbrisi</td>
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






