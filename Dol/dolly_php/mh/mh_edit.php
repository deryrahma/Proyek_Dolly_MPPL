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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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

            <!-- Pelatihan -->
            <li class="treeview">
              <a href="mh_pelatihan.php">
                <img src="../../dist/img/training-icon.png"/ width="10%" height="10%">
                <span>Pelatihan</span>
              </a>
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
                  <a href="mh_harian.php">
                     <img src="../../dist/img/red.png"/ width="10%" height="10%">
                    <span>Report Harian</span>    
                  </a>
                </li>
                <li class="treeview">
                  <a href="mh_mingguan.php">
                     <img src="../../dist/img/yellow.png"/ width="10%" height="10%">
                     <span>Report Mingguan</span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="mh_bulanan.php">
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
          <h1>
            <center>Perubahan Data Diri Siswa Binaan</center><hr>
          </h1>
        </section>
        
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">

            

          </div><!-- /.row -->

           <?php
            $ID_ANAK = $_GET['id_anak'];
            include "../connection.php";
            $query = "SELECT * FROM anak_binaan WHERE ID_ANAK = " . $ID_ANAK;
            $result = mysql_query($query);
            if($result)
            {
                while($row = mysql_fetch_array($result))
                {
                  $nama_anak = $row['NAMA_ANAK'];
                  $jk_anak = $row['JK_ANAK'];
                  $tempat_lahir = $row['TEMPAT_LAHIR'];
                  $tanggal_lahir = $row['TANGGAL_LAHIR'];
                  $agama = $row['AGAMA'];
                  $anak_ke = $row['ANAK_KE'];
                  $alamat_siswa = $row['ALAMAT_SISWA'];
                  $tanggal_masuk = $row['TANGGAL_MASUK'];
                  $kelas = $row['KELAS'];
                  $nama_sekolah = $row['NAMA_SEKOLAH'];
                  $sekolah_asal = $row['SEKOLAH_ASAL'];
                  $alamat_sekolah = $row['ALAMAT_SEKOLAH'];
                  $nama_ayah = $row['NAMA_AYAH'];
                  $nama_ibu = $row['NAMA_IBU'];
                  $alamat_ortu = $row['ALAMAT_ORTU'];
                  $pekerjaan_ayah = $row['PEKERJAAN_AYAH'];
                  $pekerjaan_ibu = $row['PEKERJAAN_IBU'];
                  $id_kakak = $row['ID_KAKAK'];
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
                  <input type="hidden" name="id_anak" value=<?php echo $ID_ANAK; ?>>
                  <input type="text" class="form-control" name="nama_anak" placeholder="Nama lengkap siswa" value=<?php echo "\"" . $nama_anak . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
                <div class="col-sm-6">
                  <div class="radio">
                    <label><input type="radio" name="jk_anak" value="L" <?php if ($jk_anak == 'L'){
                      echo " checked";
                    } {
                      # code...
                    } ?>>Laki-laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="jk_anak" value="P" <?php if ($jk_anak == 'P'){
                      echo " checked";
                    } {
                      # code...
                    } ?>>Perempuan</label> 
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Tempat Lahir</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir siswa" value=<?php echo "\"" . $tempat_lahir . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                  <input type="date" class="form-control" name="tanggal_lahir" value=<?php echo "\"" . date("Y-m-d", strtotime($tanggal_lahir)) . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Agama</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="agama" placeholder="Agama siswa" value=<?php echo "\"" . $agama . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Anak ke -</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="anak_ke" value=<?php echo "\"" . $anak_ke . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat_siswa" placeholder="Alamat rumah siswa" value=<?php echo "\"" . $alamat_siswa . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Masuk Sekolah</label>
                <div class="col-sm-3">
                  <input type="date" class="form-control" name="tanggal_masuk" placeholder="Email" value=<?php echo "\"" . date("Y-m-d", strtotime($tanggal_masuk)) . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Kelas</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="kelas" placeholder="Diterima di kelas"  value=<?php echo "\"" . $kelas . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Sekolah</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama sekolah" value=<?php echo "\"" . $nama_sekolah . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Sekolah Asal</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="sekolah_asal" placeholder="Sekolah asal" value=<?php echo "\"" . $sekolah_asal . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Alamat Sekolah</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat_sekolah" placeholder="Alamat sekolah asal" value=<?php echo "\"" . $alamat_sekolah . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Ayah</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nama_ayah" placeholder="Nama ayah siswa" value=<?php echo "\"" . $nama_ayah . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Ibu</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nama_ibu" placeholder="Nama ibu siswa" value=<?php echo "\"" . $nama_ibu . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Alamat Orang Tua</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="alamat_ortu" placeholder="Alamat orang tua siswa" value=<?php echo "\"" . $alamat_ortu . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan Ayah</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan ayah" value=<?php echo "\"" . $pekerjaan_ayah . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan Ibu</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan ibu" value=<?php echo "\"" . $pekerjaan_ibu . "\""; ?>>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Nama Kakak Asuh</label>
                <div class="col-sm-6">
                  <!--
                  <input type="text" class="form-control" name="nama_kakak" placeholder="Nama kakak asuh">
                  -->
                  <select name="id_kakak" class="form-control" title="Nama kakak asuh">
                    <?php
                      //include "connection.php";
                      $query = "SELECT * FROM kakak_asuh";
                      $result = mysql_query($query);
                      if($result)
                      {
                          while($row = mysql_fetch_array($result))
                          {
                            //echo $row['ID_KAKAK'] . "<br>";
                            echo "<option value=" . $row['ID_KAKAK'];
                            if ($row['ID_KAKAK'] == $id_kakak) {
                              echo " selected";
                            }
                            echo ">" . $row['NAMA_KAKAK'] . "</option>";
                          }
                      } else {
                          echo 'Invalid query: ' . mysql_error() . "\n";
                          echo 'Whole query: ' . $query; 
                      }
                    ?>
                  </select>
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
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>