<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contro de gastos</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">    
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/Logo_CG.png" alt="CGLogo" height="600" width="600">
        </div>
        
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.html" class="nav-link">Home</a>
            </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link">
            <img src="dist/img/Logo_CG.png" alt="Control de Gastos" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Control de Reservas</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/JuanAlvarez.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Juan Álvarez.</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li  OnClick="ch('pages/dashboard.php')" class="nav-item active">
                    <a  href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <!-- Reservas -->
                <li  OnClick="ch('pages/reservas.php')" class="nav-item active">
                    <a  href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Reservas</p>
                    </a>
                </li>
                <hr class="dropdown-divider">
                <!-- Docentes -->
                <li OnClick="ch('pages/docentes.php')" class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-star nav-icon"></i>
                    <p>Docentes</p>
                    </a>
                </li>
                <!-- Aulas -->
                <li OnClick="ch('pages/aulas.php')" class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-star nav-icon"></i>
                    <p>Aulas</p>
                    </a>
                </li>
                <!-- Materias -->
                <li OnClick="ch('pages/materias.php')" class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-star nav-icon"></i>
                    <p>Materias</p>
                    </a>
                </li>
                <!-- Grupos -->
                <li OnClick="ch('pages/grupos.php')" class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-star nav-icon"></i>
                    <p>Grupos</p>
                    </a>
                </li>
                <!-- Eventos -->
                <li OnClick="ch('pages/eventos.php')" class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-star nav-icon"></i>
                    <p>Eventos</p>
                    </a>
                </li>

                <hr class="dropdown-divider">
               <!-- Administración --> 
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Administración
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <!-- Tipo Ingresos -->
                    <li class="nav-item">
                        <a href="pages/forms/validation.html" class="nav-link">
                        <i class="far fa-file nav-icon"></i>
                        <p>Tipo Ingresos</p>
                        </a>
                    </li>
                    <!-- Tipo Gastos -->
                    <li class="nav-item">
                        <a href="pages/forms/validation.html" class="nav-link">
                        <i class="far fa-file nav-icon"></i>
                        <p>Tipo Gastos</p>
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

        <!-- Content Wrapper. Contains page content -->
        <div id="qa" class="content-wrapper">

        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="#">ControlDeGastos.com</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    <!-- Scripts -->    
    <div id="js">
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>    
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script> 
        <script src="dist/js/script.js"></script> 
    </div> 
</body>
</html>