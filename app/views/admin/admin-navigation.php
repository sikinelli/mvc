     
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<style>
.skin-blue .main-header .logo{background-color: #2bafa7;}
.skin-blue .main-header .navbar{background-color: #2bafa7;}
</style>

<header class="main-header">
    <!-- Logo -->
    <a href="http://www.amplitudo.me" target="_blank" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Amplitudo</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">  
      
          <a class="navbar-brand" href="#"></a>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="app/views/admin/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo Session::get("username"); ?></span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li style="background-color: #2bafa7" class="user-header">
                <img src="app/views/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">
        
                <p>
                  <?php echo "Korisnik: " .Session::get("username"); ?>                 
                </p>                 
              </li>

        

              <!-- Meni odjava i profil-->
              <li class="user-footer">                
                <div class="pull-right">
                <a href="<?php echo BASE_URL;?>/Profil" class="btn btn-default btn-flat">Profil</a>
                  <a href="<?php echo BASE_URL;?>/Login/logout" class="btn btn-default btn-flat">Odjava</a>
                </div>
              </li>

          <!-- Control Sidebar Toggle Button -->        
        </ul>
        
      </div>
    </nav>
  </header>