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
              <a href="mh_profil_diri.php">
                <img src="../../dist/img/icon2.png"/ width="10%" height="10%">
                <span>Profil Diri</span>
              </a>
            </li> 

            <!-- Data Elemen -->
            <li class="treeview">
              <a href="#">
                <img src="../../dist/img/population.png"/ width="10%" height="10%">
                <span>Data Elemen</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="mh_elemen_kakak.php">
                     <img src="../../dist/img/kakak-icon.png"/ width="10%" height="10%">
                    <span>Kakak Asuh</span>    
                  </a>
                </li>
                <li class="treeview">
                  <a href="mh_elemen_siswa.php">
                     <img src="../../dist/img/siswa-icon.ico"/ width="10%" height="10%">
                     <span>Siswa Binaan</span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Rapor Penilaian -->
            <li class="treeview">
              <a href="#">
                <img src="../../dist/img/doc-icon.png"/ width="10%" height="10%">
                <span>Rapor Penilaian</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="mh_nilai_harian.php">
                     <img src="../../dist/img/red.png"/ width="10%" height="10%">
                    <span>Penilaian Harian</span>    
                  </a>
                </li>
                <li class="treeview">
                  <a href="mh_nilai_mingguan.php">
                     <img src="../../dist/img/yellow.png"/ width="10%" height="10%">
                     <span>Penilaian Mingguan</span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Report -->
            <li class="treeview">
              <a href="#">
                <img src="../../dist/img/doc-icon.png"/ width="10%" height="10%">
                <span>Report</span>
                <i class="glyphicon glyphicon-chevron-down pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="mh_report_harian.php">
                     <img src="../../dist/img/red.png"/ width="10%" height="10%">
                    <span>Report Harian</span>    
                  </a>
                </li>
                <li class="treeview">
                  <a href="mh_report_mingguan.php">
                     <img src="../../dist/img/yellow.png"/ width="10%" height="10%">
                     <span>Report Mingguan</span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="mh_report_bulanan.php">
                     <img src="../../dist/img/green.png"/ width="10%" height="10%">
                     <span>Report Bulanan</span>
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
                  Penilaian Harian
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

          <div class="row">

          </div>

          <div>
          <b> Nama anak asuh : </b><h4>
          <?php
            include "../connection.php";
            //echo $_GET['id_pelatihan'] . "\n";
            $query = "SELECT * FROM anak_binaan WHERE ID_ANAK =" . $_GET['id_anak'];
            $result = mysql_query($query);
            if($result)
            {
                while($row = mysql_fetch_array($result))
                {
                  echo $row['NAMA_ANAK'];
                }
            }
            echo "&nbsp;</h4><br /><br /><b>Pelatihan: </b><h4> ";

            $query = "SELECT * FROM pelatihan WHERE ID_PELATIHAN=" . $_GET['id_pelatihan'];
            $result = mysql_query($query);
            if($result)
            {
                while($row = mysql_fetch_array($result))
                {
                  echo $row['NAMA_PELATIHAN'];
                }
            }
            echo "</h4>";
          ?>
          </h4>
            <br>

            <form method="POST" action="cek_tambah_rapor.php">
              <table id="table2" class="table table-hover table-bordered stripe row-border order-column" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Nilai</th>
                    <th>Indikator</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    //include "../connection.php";

                    //echo $_GET['id_pelatihan'] . "\n";
                    $query = "SELECT * FROM jadwal_pelatihan WHERE jadwal_pelatihan.JADWAL_PELATIHAN='" . $_GET['jadwal_pelatihan'] . "' AND jadwal_pelatihan.ID_PELATIHAN=" . $_GET['id_pelatihan'];
                    //echo "<br>id_jadwal" . $query . "<br>";
                    $result = mysql_query($query);
                    if($result)
                    {
                      while($row = mysql_fetch_array($result))
                      {
                        $id_jadwal = $row['ID_JADWAL'];
                      }
                    }

                    $query = "SELECT * FROM pelatihan, parameter, jadwal_pelatihan, rapor_harian WHERE pelatihan.ID_PELATIHAN =" . $_GET['id_pelatihan'] . " AND pelatihan.ID_PELATIHAN = parameter.ID_PELATIHAN AND rapor_harian.ID_PARAMETER = parameter.ID_PARAMETER AND jadwal_pelatihan.ID_PELATIHAN = pelatihan.ID_PELATIHAN AND rapor_harian.ID_JADWAL = jadwal_pelatihan.ID_JADWAL AND jadwal_pelatihan.ID_JADWAL = " . $id_jadwal . " AND rapor_harian.ID_ANAK = " . $_GET['id_anak'];
                    $result = mysql_query($query);
                    if($result)
                    {
                      $count = 0;
                      while($row = mysql_fetch_array($result))
                      {
                        echo "<tr>";
                        echo "<td>" . $row['PARAMETER'] . "</td>
                        <td>" . $row['NILAI'] . "</td>
                        <td></td>";
                        echo "</tr>";
                        $count++;
                      }
                    }
                  ?>
                </tbody>
              </table>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" class="btn btn-danger">Batal</button>
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
        scrollY:        "100px",
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