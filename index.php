<?php
session_start();
include 'kon.php'; 

?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="Aplikasi Diagnosa Penyakit Kepala Berbasis Website" />

    <meta name="description" content="Media Informasi Diagnosa Penyakit Kepala" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Diagnosa Penyakit Kepala</title>

    <!-- Bootstrap v3.3 -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bagas Style -->
    <link href="assets/css/bagas.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- header-->
  <?php include "modul/head.php";?>
  <!-- selesai-->
    <div class="container">
    <div class="row">
      <!-- Mulai Navbar -->
          <?php include "modul/menu.php"; ?>
      <!-- Selesai Navbar-->
    </div>
    </div>
  <!-- Mulai Slider -->
  <div class="container"> 
    <div class="row">
      <?php 

                if(isset($_GET['page']))
                {
                 switch($_GET['page'])
                {
                    //Setting
                    case 'info': include 'modul/blog.php'; break;
                    case 'diagnosa': include 'modul/diagnosa.php'; break;
                    case 'gejala': include 'modul/user_diagnosa.php'; break;
                    case 'aksiku': include 'modul/aksiku.php'; break;
                    case 'profil': include 'modul/profil.php'; break;
                     
                }
                
        }
            
        else{
                        include "modul/slide.php";
                     
       }

?>
    <?php //include "modul/slide.php";?>
    <div class="oren"></div>
    </div>
  </div>
    <!-- Selesai -->
    <br>
    <!-- Mulai Blog Home & sidebar -->
      <div class="container">
          <div class="row content">
          <!-- Mulai Blog Home --> 
            <div class="col-sm-12">
              <?php //include"modul/blog.php";?>
            </div>
            <!-- Selesai Blog Home-->
            <!-- Mulai Sidebar -->
            <div class="col-sm-3 sidenav">
        
            </div>
            <!-- Selesai Sidebar-->
        </div>
    </div>
      <!-- Selesai -->
      <?php include 'modul/bawah.php';?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>