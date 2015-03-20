<?php
  include '../connection.php';
  session_start();
  if (!isset($_SESSION['username'])) {
    header('location:../index.php');
  }
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Kakak Asuh DollyCare | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="../../dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../../dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../../plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="../../plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/dataTables.fixedColumns.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
      .skrol {
        overflow: scroll;
      }

        /* Ensure that the demo table scrolls */
      th, td { white-space: nowrap; }
      div.dataTables_wrapper {
          width: 800px;
          margin: 0 auto;
      }
    </style>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="mh_panel.php" class="logo"><b>Dolly</b>Care</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
             <li class="dropdown user user-menu">
                <a href="../cek_logout.php"><i class="glyphicon glyphicon-off"></i><span class="hidden-xs">Logout</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../dist/img/user.png" alt="User Image"/>
            </div>
            <div class="pull-left info">
              <h4>Kakak Asuh</h4>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <center><span style="color:#fff;"><a href="mh_input.php"><i class="glyphicon glyphicon-plus">&nbsp;&nbsp;&nbsp;</i></a>
              <a href="mh_edit_pilih.php"><i class="glyphicon glyphicon-pencil">&nbsp;&nbsp;&nbsp;</i></a>
              <a href="mh_hapus_pilih.php"><i class="glyphicon glyphicon-trash"></i></a></span></center>
              <br/>
            <li class="header">MENU UTAMA</li>
            <li class="treeview">
              <a href="mh_panel.php">
                <img src="../../dist/img/population.png"/ width="10%" height="10%">
                <span>Data Siswa</span>
              </a>
            </li>
            <li class="treeview">
              <a href="mh_harian.php">
                 <img src="../../dist/img/red.png"/ width="10%" height="10%">
                <span>Report Harian</span>
                
              </a>
             
            </li>
            <li class="active treeview">
              <a href="mh_mingguan.php">
                 <img src="../../dist/img/yellow.png"/ width="10%" height="10%">
                 <span>Report Mingguan</span>
              </a>
            </li>
            <li>
              <a href="mh_bulanan.php">
                 <img src="../../dist/img/green.png"/ width="10%" height="10%">
                 <span>Report Bulanan</span>
              </a>
            </li>
            
          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <center>Laporan Mingguan</center><br>
          </h1>
        </section>
        
        
        <!-- Main content -->
        <section class="content">

          <!-- Main row -->
          
          <div class="row" style="background: white; width: 90%; padding: 5%; border: 2px solid white; border-radius: 25px; margin-left: auto; margin-right: auto;">
          
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Lengkap</label>
                <div class="col-sm-8 pull-left">
                  Bima Nisrina Madjid
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Perilaku yang Diamati</label>
                <div class="col-sm-8">
                  Baik
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Perubahan Perilaku yang Terjadi</label>
                <div class="col-sm-8">
                  Sangat Baik
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Sumber Informasi</label>
                <div class="col-sm-8">
                  Kepo
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Cara Pendekatan</label>
                <div class="col-sm-8">
                  Ngobrol
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-8">
                  Mantap
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Cerita Menarik</label>
                <div class="col-sm-8">
                  Adadeh
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Kesimpulan</label>
                <div class="col-sm-8">
                  Bisa disimpulkan sendiri
                </div>
              </div>
                           
              
            </form>
          
          </div>
          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Dolly Softwarehouse Ltd.</a></strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->
    <script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false
    } );
 
    new $.fn.dataTable.FixedColumns( table, {
        leftColumns: 6
    } );
} );
    </script>

    <script src="../../dist/js/jQuery.js"></script>
    <script src="../../dist/js/jquery.dataTables.js"></script>
    <script src="../../dist/js/dataTables.fixedColumns.js"></script>
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>