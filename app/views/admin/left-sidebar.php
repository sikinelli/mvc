<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   
    <section class="sidebar">
      <!-- Sidebar user panel -->      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="app/views/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>


        <div class="pull-left info">
          <p><?php echo Session::get("username"); ?>   </p>          
        </div>
      </div>

    


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          

        <!-- PROIZVODI -->
        <li class="treeview">
          <a href="#">           
            <i class="fa fa-table"></i> <span>Proizvodi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo BASE_URL; ?>/Proizvodi"><i class="fa fa-circle-o"></i> Lista proizvoda</a></li>
            <li><a href="<?php echo BASE_URL; ?>/addProizvod"><i class="fa fa-circle-o"></i> Novi proizvod</a></li>
          </ul>          
        </li>        
		
		
		
		<!-- KORISNICI -->
        <li class="treeview">
          <a href="#">           
            <i class="fa fa-table"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo BASE_URL; ?>/Blog"><i class="fa fa-circle-o"></i> Lista blogova</a></li>
            <li><a href="<?php echo BASE_URL; ?>/addBlog"><i class="fa fa-circle-o"></i> Novi blog</a></li>
          </ul>          
        </li> 


        <!-- KARIJERA -->
        <li class="treeview">
          <a href="#">           
            <i class="fa fa-table"></i> <span>Karijera</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo BASE_URL; ?>/Karijera"><i class="fa fa-circle-o"></i> Lista</a></li>
            <li><a href="<?php echo BASE_URL; ?>/addKarijera"><i class="fa fa-circle-o"></i> Nova karijera</a></li>
          </ul>          
        </li> 





          <!-- Profil-->
         <li class="">
          <a href="<?php echo BASE_URL; ?>/Profil">           
            <i class="fa fa-table"></i> <span>Moj Profil</span>            
          </a>                 
        </li> 
       
       
       
    </section>
    <!-- /.sidebar -->    
  </aside>