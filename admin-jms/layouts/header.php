<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../php/cerrarSesion.php" class="nav-link">Cerrar Sesión</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../" class="nav-link">Página principal</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="./../img/logo-byn.png" alt="AdminLTE Logo" class="brand-image">
      <span class="brand-text font-weight-light">Jamusa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Javier Muñoz</a>
        </div>
      </div>    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin-jms/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./ver-blog.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./nuevo-blog.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Nuevo post</p>
                </a>
              </li>              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Portfolio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./ver-portfolio.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver portfolios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./nuevo-portfolio.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Nuevo portfolio</p>
                </a>
              </li>              
            </ul>
          </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>