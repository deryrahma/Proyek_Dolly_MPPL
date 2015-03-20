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
    <title>Admin DollyCare | Dashboard</title>
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
    <link href="../../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/dataTables.fixedColumns.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="adm_panel.php" class="logo"><b>Dolly</b>Care</a>
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
              <h4>Admin</h4>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="header">MENU UTAMA</li>    

            <!-- Profil Diri -->
            <li class="treeview">
              <a href="adm_profil_diri.php">
                <img src="../../dist/img/profile-icon.png"/ width="10%" height="10%">
                <span>Profil Diri</span>
              </a>
            </li>

            <!-- Manajemen Kakak Asuh -->
            <li class="treeview">
              <a href="#">
                <img src="../../dist/img/kasuh-icon.png"/ width="10%" height="10%">
                <span>Manajemen Kakak Asuh</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="adm_lihat_kakak.php">
                     <i class="glyphicon glyphicon-eye-open"></i>
                    <span>Lihat Kakak Asuh</span>    
                  </a>
                </li>
                <li class="treeview">
                  <a href="adm_tambah_kakak.php">
                     <i class="glyphicon glyphicon-plus"></i>
                     <span>Tambah Kakak Asuh</span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="adm_hapus_kakak.php">
                     <i class="glyphicon glyphicon-trash"></i>
                     <span>Hapus Kakak Asuh</span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Manajemen Pelatihan -->
            <li class="treeview">
              <a href="#">
                <img src="../../dist/img/training-icon.png"/ width="10%" height="10%">
                <span>Manajemen Pelatihan</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="adm_lihat_pelatihan.php">
                     <i class="glyphicon glyphicon-eye-open"></i>
                    <span>Lihat Pelatihan</span>    
                  </a>
                </li>
                <li class="treeview">
                  <a href="adm_tambah_pelatihan.php">
                     <i class="glyphicon glyphicon-plus"></i>
                     <span>Tambah Pelatihan</span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="adm_hapus_pelatihan.php">
                     <i class="glyphicon glyphicon-trash"></i>
                     <span>Hapus Pelatihan</span>
                  </a>
                </li>
              </ul>
            </li>

            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <center>Edit Profil Kakak Asuh</center><hr>
          </h1>
        </section>
        
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">

            

          </div><!-- /.row -->

           <?php
            $ID_KAKAK = $_GET['id_kakak'];
            include "../connection.php";
            $query = "SELECT * FROM kakak_asuh WHERE ID_KAKAK = " . $ID_KAKAK;
            $result = mysql_query($query);
            if($result)
            {
                while($row = mysql_fetch_array($result))
                {
                  $nama_kakak = $row['NAMA_KAKAK'];
                  $alamat_kakak = $row['ALAMAT_KAKAK'];
                  $no_telp_kakak = $row['NO_TELPON_KAKAK'];
                  $username = $row['USERNAME'];
                  $password = $row['PASSWORD'];
                }
            } else {
                echo 'Invalid query: ' . mysql_error() . "\n";
                echo 'Whole query: ' . $query; 
            }
          ?>

          <!-- Main row -->
          <div class="row">
          
            <form class="form-horizontal" action="cek_edit.php" method="post">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Lengkap</label>
                <div class="col-sm-6">
                  <input type="hidden" name="nama_kakak" value=<?php echo $nama_kakak; ?>>
                  <input type="text" class="form-control" name="nama_kakak" placeholder="Nama lengkap kakak asuh" value=<?php echo "\"" . $nama_kakak . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Alamat Rumah</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat_kakak" placeholder="Alamat kakak asuh" value=<?php echo "\"" . $alamat_kakak . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">No Telpon Kakak Asuh</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="no_telp_kakak" placeholder="No telp kakak asuh" value=<?php echo "\"" . $no_telp_kakak . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="username" placeholder="Username" value=<?php echo "\"" . $username . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="password" placeholder="Password" value=<?php echo "\"" . $password . "\""; ?>>
                </div>
              </div>
             
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-success">UPDATE</button>
                  <button type="reset" class="btn btn-danger">Batal</button>
                </div>
              </div>
            </form>
          
          </div>


      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Dolly Softwarehouse Ltd.</a></strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->
    

    <script src="../../dist/js/jQuery.js"></script>
    <script src="../../dist/js/jquery.dataTables.js"></script>
    <script src="../../dist/js/dataTables.fixedColumns.js"></script>
    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="../../plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="../../plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="../../plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>