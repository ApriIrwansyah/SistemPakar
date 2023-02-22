<?php
   session_start();
   
   include "koneksi.php";

   if(!isset($_SESSION['admin'])){
      header("location:login.php");
      exit();
   }

   if(isset($_SESSION['admin'])){
      $username = $_SESSION['admin'];
   }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'atas.php';?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include'menu.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
     <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Selamat Datang Di Admin Panel</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Admin Panel ini dibuat sedemikian simpel supaya bisa mudah di pahami dan dipakai untuk keperluan admin untuk mengatur postingan dan lain-lain.

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <strong>Modified &copy; by BagasUnix.</strong>
        <!-- /.box-footer-->
      </div>
      </div>

      <!-- /.box -->
    <?php 
                if(isset($_GET['page']))
                {
                 switch($_GET['page'])
                {
                    
                       case 'gejala': include'pages/menu/input/input_gejala.php'; 
                       break;
                       case 'penyakit': include'pages/menu/input/input_penyakit.php';
                       break;
                       case 'list-gejala': include 'pages/menu/tabel/list-gejala.php';
                       break;
                       case 'list-penyakit': include 'pages/menu/tabel/list-penyakit.php';
                       break;
                       case 'list-user': include 'pages/menu/tabel/data-user.php';
                       break;
                       case 'editor': include 'editor.php';
                       break;
                       case 'editgejala': include 'edit-g.php';
                       break;
                       case 'editusr': include 'edit-user.php';
                       break;
                       case 'laporan': include 'pages/menu/tabel/laporan.php';
                         break;
                     }
                  }
            ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'bawah.php';
?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "asc"]]
                });
            });
        </script>
  </script>
</body>
</html>