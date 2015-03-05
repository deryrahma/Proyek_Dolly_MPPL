<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin DollyCare | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="../dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/dataTables.fixedColumns.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
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
        <a href="index2.html" class="logo"><b>Dolly</b>Care</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <i class="glyphicon glyphicon-off"></i>
                  <span class="hidden-xs">Logout</span>
                </a>
               
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">


          <hr class="divider">

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <center><span style="color:#fff;"><i class="glyphicon glyphicon-plus">&nbsp;&nbsp;&nbsp;</i>
              <a href="lurah_edit.php"><i class="glyphicon glyphicon-pencil">&nbsp;&nbsp;&nbsp;</i></a>
              <a href="lurah_delete.php"><i class="glyphicon glyphicon-trash">&nbsp;&nbsp;&nbsp;</i></a></span></center>
              <br/>
            <li class="header">MENU UTAMA</li>
            <li class="active treeview">
              <a href="lurah_panel.php">
                <img src="../dist/img/penduduk.png"/ width="10%" height="10%">
                <span>Data Penduduk</span>
              </a>
            </li>
            <li class="treeview">
              <a href="lurah_ekonomi_history.php">
                 <img src="../dist/img/ekonomi.png"/ width="10%" height="10%">
                <span>Ekonomi</span>
                
              </a>
             
            </li>
            <li>
              <a href="lurah_bantuan.php">
                 <img src="../dist/img/bantuan.png"/ width="10%" height="10%">
                 <span>Bantuan</span>
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
            Form Input Data Penduduk
          </h1>
        </section>
        
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">

            

          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
          <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIK</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="NIK">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Domisili</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat Domisili">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">RW / RT</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="RW / RT">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kelurahan / Desa</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Kelurahan / Desa">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jenis Kelamin">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Agama</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Agama">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Perkawinan</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Status Perkawinan">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Jumlah Anak</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Anak">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Pendidikan Terakhir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No. Telpon</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="No. Telpon">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No. KK</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="No. KK">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Sesuai KK</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat Sesuai KK<">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status dalam KK</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Status dalam KK">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Penyakit</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Penyakit">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Penanganan</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Penanganan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">SKPD</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="SKPD">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Pelatihan</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jenis Pelatihan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tahun Pelatihan</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tahun Pelatihan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pekerjaan</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat Kerja</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tempat Kerja">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upah Keja</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Upah Keja">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Golongan Gaji</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Golongan Gaji">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pengeluaran</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Pengeluaran">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kepemilikan Rumah</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Kepemilikan Rumah">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Rumah</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jenis Rumah">
                    </div>
                   
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Data diisi sebenar-benarnya
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
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

    <script src="../dist/js/jQuery.js"></script>
    <script src="../dist/js/jquery.dataTables.js"></script>
    <script src="../dist/js/dataTables.fixedColumns.js"></script>
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