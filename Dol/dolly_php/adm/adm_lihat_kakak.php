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
    <style>
        /* Ensure that the demo table scrolls */
      th, td { white-space: nowrap; }
      
      #table1 {
        overflow: auto;
        height: 100px;
        display: inline-block;
      }

      #table2 {
        overflow: auto;
        height: 300px;
        display: inline-block;
      }
    </style>
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

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <table id="table1">
            <tr>
              <td>
                <h1>
                  Data Kakak Asuh
                </h1>
              </td>
              <td>
                <div class="col-md-4 pull-right">
                  <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                      <input type="text" name="q" class="form-control" placeholder="Cari..."/>
                      <span class="input-group-btn">
                        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="glyphicon glyphicon-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </td>
            </tr>
          </table>
        </section>

       
        <!-- Main content -->
        <section class="content">
          <div class="row"><center>
            <table id="table2" class="table table-hover table-bordered stripe row-border order-column" cellspacing="0" width="100%">
              <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat Rumah</th>
                  <th>No Telpon</th>
                  
              </tr>
              </thead>
            <tbody>
                <?php
                include "../connection.php";
                $query = "SELECT * FROM kakak_asuh";
                $result = mysql_query($query);
                $i=0;
                if($result)
                {
                    while($row = mysql_fetch_array($result))
                    {
                      $i++;
                      //echo $row['ID_KAKAK'] . "<br>";
                      echo "<tr>\n\t";
                      echo "<td>" . $i . "</td>\n\t";
                      echo "<td>" . $row['NAMA_KAKAK'] . "</td>\n\t";
                      echo "<td>" . $row['ALAMAT_KAKAK'] . "</td>\n\t";
                      echo "<td>" . $row['NO_TELPON_KAKAK'] . "</td>\n\t";
  
                    }
                } else {
                    echo 'Invalid query: ' . mysql_error() . "\n";
                    echo 'Whole query: ' . $query; 
                }
              ?>
            </tbody>
            </table></center>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

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