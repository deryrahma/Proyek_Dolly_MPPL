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
        <!-- Main content -->
        <section class="content">

          <!-- Info boxes -->
          <!-- /.row -->

          <!-- Main row -->
          <div class="row">
             <div class="row">

            <div class="col-md-1">
              <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                RW
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
              </ul>
            </div>
            </div>
            <div class="col-md-1">
              <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                RT
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
              </ul>
            </div>
            </div>

          </div><!-- /.row -->
          <div class="skrol" id="example">
            <table class="table table-hover table-bordered stripe row-border order-column" cellspacing="0" width="100%">
            <thead>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat Domisili</th>
            <th>RT/ RW</th>
            <th>Kelurahan/ Desa</th>
            <th>Kecamatan</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
            <td>johncarter@mail.com</td>
            <td>johncarter@mail.com</td>
            <td> <a href="lurah_edit_1.php"><i class="glyphicon glyphicon-pencil">&nbsp;&nbsp;&nbsp;</i></a></td>
        </tr>
        <tr>
             <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
            <td>johncarter@mail.com</td>
            <td>johncarter@mail.com</td>
            <td> <a href="lurah_edit_1.php"><i class="glyphicon glyphicon-pencil">&nbsp;&nbsp;&nbsp;</i></a></td>
        </tr>
        <tr>
             <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
            <td>johncarter@mail.com</td>
            <td>johncarter@mail.com</td>
            <td> <a href="lurah_edit_1.php"><i class="glyphicon glyphicon-pencil">&nbsp;&nbsp;&nbsp;</i></a></td>
        </tr>
    </tbody>
          </table>
        </id>
          
          
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