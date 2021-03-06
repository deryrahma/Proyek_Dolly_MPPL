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
          <center><table>
            <tr>
              <td>
                <h1>
                  Penilaian Mingguan
                </h1>
              </td>
            </tr>
          </table></center>
        </section>
        
        
        <!-- Main content -->
        <section class="content">

          <!-- Main row -->
          <div class="row">
            <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Diagram Perkembangan Anak Binaan selama Seminggu</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                </div>
            </div>

            <?php
              $id_pelatihan = $_GET['id_pelatihan'];
              $minggu_ke = $_GET['minggu_ke'];
              $bulan_ke = $_GET['bulan_ke'];
              $tahun_ke = $_GET['tahun_ke'];
              $id_anak = $_GET['id_anak'];
              echo
              "<form class=\"form-horizontal\" method=\"POST\" action=\"cek_tambah_mingguan.php?id_pelatihan=" . $id_pelatihan . "&&id_anak=" . $_GET['id_anak'] . "&&minggu_ke=" . $minggu_ke . "&&bulan_ke=" . $bulan_ke . "&&tahun_ke=" . $tahun_ke . "\">";
            ?>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label"><b> Nama Lengkap </b></label>
                <div class="col-sm-6">
                <h4><?php
                  include "../connection.php";
                  

                  $query = "SELECT * FROM anak_binaan WHERE ID_ANAK =" . $_GET['id_anak'];
                  $result = mysql_query($query);
                      if($result)
                      {
                          while($row = mysql_fetch_array($result))
                          {
                            echo $row['NAMA_ANAK'];
                          }
                      }
                ?></h4>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Perilaku yang Diamati</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" name="perilaku_yang_diamati"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Perubahan Perilaku yang Terjadi</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" name="perubahan_perilaku_yang_terjadi"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Sumber Informasi</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" name="sumber_informasi"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Cara Pendekatan</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" name="cara_pendekatan"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" name="keterangan"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Cerita Menarik</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3" name="cerita_menarik"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Kesimpulan</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
                           
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
    
    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../../plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        "use strict";
        //DONUT CHART
        var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["red", "green", "blue", "yellow", "turquoise", "pink", "black", "purple", "orange", "magenta"],
          data: [
            <?php
              $sql = "SELECT * FROM jadwal_pelatihan WHERE ID_PELATIHAN = " . $_GET['id_pelatihan'] . " ORDER BY JADWAL_PELATIHAN DESC";
              $result = mysql_query($sql);
              
              if($result)
              {
                while($row = mysql_fetch_array($result))
                {
                  $flag = 0;
                  $jadwal_pelatihan = explode("-", $row['JADWAL_PELATIHAN']);
                  if ($jadwal_pelatihan[0] == $tahun_ke && $jadwal_pelatihan[1] == $bulan_ke)
                  {
                    if($minggu_ke == 1 && $jadwal_pelatihan[2] >= 1 && $jadwal_pelatihan[2] <= 7){
                      $flag = 1;
                    } else if($minggu_ke == 2 && $jadwal_pelatihan[2] >= 8 && $jadwal_pelatihan[2] <= 14){
                      $flag = 1;
                    } else if($minggu_ke == 3 && $jadwal_pelatihan[2] >= 15 && $jadwal_pelatihan[2] <= 21){
                      $flag = 1;
                    } else if($minggu_ke == 4 && $jadwal_pelatihan[2] >= 22 && $jadwal_pelatihan[2] <= 28){
                      $flag = 1;
                    } else if($minggu_ke == 5 && $jadwal_pelatihan[2] >= 29 && $jadwal_pelatihan[2] <= 31){
                      $flag = 1;
                    } 
                    if($flag == 1)
                    {
                      $id_pel = $_GET['id_pelatihan'];
                      $id_jad = $row['ID_JADWAL'];
                      $jadwal_pel = $row['JADWAL_PELATIHAN'];
                      $query = "SELECT * FROM pelatihan, parameter, rapor_harian WHERE pelatihan.ID_PELATIHAN =" . $id_pel . " AND pelatihan.ID_PELATIHAN = parameter.ID_PELATIHAN AND rapor_harian.ID_PARAMETER = parameter.ID_PARAMETER AND rapor_harian.ID_JADWAL = " . $id_jad . " AND rapor_harian.ID_ANAK = " . $id_anak;
                      //echo "/*" . $query . "<br>*/";
                      $result = mysql_query($query);
                      if($result)
                      {
                        $count = 0;
                        while($row = mysql_fetch_array($result))
                        {
                          /*
                          $ada = 0;
                          for($i = 0; $ada == 0 && $i < $count; $i++){
                            if($listParameter[$i] == $row['PARAMETER']){
                              $ada = 1;
                            }
                          }
                          if($ada == 1 || $count == 0){
                            $listParameter[$i] = $row['PARAMETER'];
                            $count++;
                          }
                          $label[$row['PARAMETER']][0] = $row['PARAMETER']; //jenis parameter
                          $label[$row['PARAMETER']][1] += $row['NILAI']; //besarnya nilai pada suatu parameter
                          $label[$row['PARAMETER']][2]++; //jumlah record pada 1 parameter
                          */
                          /*
                          if($count==0){
                            $label[$row['PARAMETER']][0] = $row['PARAMETER'];
                            $label[$row['PARAMETER']][1] = $row['NILAI'];
                            $label[$row['PARAMETER']][2] = $row['PARAMETER'];
                          }
                          */
                          /*
                          $label[$row['PARAMETER']][0] += $row['NILAI']; //jumlah nilai
                          $label[$row['PARAMETER']][1] += 1; //jumlah record
                          $label[$row['PARAMETER']][2] = $row['PARAMETER']; //jumlah record
                          */
                          //$count++;
                          echo "{label: \"" . $row['PARAMETER'] . "\", value: " . $row['NILAI'] . "},\n";
                        }
                      }
                    }
                  }
                }
              }
              /*
              for ($i=0; $i < $count; $i++) { 
                echo "{label: \"" . $label[$listParameter[$i]][0] . "\", value: " . ($label[$listParameter[$i]][1])/$label[$listParameter[$i]][2] . "},";
              }
              */
            ?>
          ],
          hideHover: 'auto'
        });
      });
    </script>
  </body>
</html>