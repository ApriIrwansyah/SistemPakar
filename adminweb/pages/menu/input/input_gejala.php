<?php
include "./././koneksi.php";
    if (isset($_POST['upload'])) {
    $idg   = $_POST['id'];
    $nm    = $_POST['gejala'];
    $inpoh = $_POST['inpoh'];
    // $gambar = strtolower(substr($_FILES['file_s']['name'],-4));
    // $path = "gambar/";
    
    // if (!empty($_FILES["file_s"]["tmp_name"])){
    // $ext=strtolower($_FILES['file_s']['type']); //memeriksa format gambar
    // if($ext=="image/jpeg" || $ext=="image/jpg" || $ext=="image/gif" || $ext=="image/png"){           
         
        //mengupload gambar dan update row table database dengan path folder dan nama image   
        // if (move_uploaded_file($_FILES['file_s']['tmp_name'], $path.basename(($idpro).$gambar))) {
    $sql = mysqli_query($koneksi, "INSERT INTO `sistem_pakar_cf`.`gejala` (`id`, `gejala`, `info`)
VALUES
  ('$idg','$nm','$inpoh')");
    if (mysqli_affected_rows($koneksi)) {
      echo "<div class='alert alert-success' role='alert'>Data Berhasil Terinput</div>";
    }else{
        echo "<div class='alert alert-error' role='alert'>Data Gagal Terinput</div>";
      }
    }   
    //   }else{
    //     echo "<div class='alert alert-error' role='alert'>Format Gambar Salah</div>";
    //   }
    //   }else{
    //   echo   "<div class='alert alert-warning' role='alert'>Anda Belum Milih Gambar atau Data Belum Lengkap</div>";
    //   }
    // }
  ?>

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Input Gejala</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data"  action="">
                <!-- text input -->
                <div class="form-group">                  
                  <input type="hidden" name="no">
                </div>
                <div class="form-group">
                  <label>Id Gejala</label>
                  <input class="form-control" placeholder="Id Gejala ..."  type="text" name="id">
                </div>
                <div class="form-group">
                  <label>Nama Gejala</label>
                  <input class="form-control" placeholder="Nama Gejala ..."  type="text" name="gejala">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Info Gejala</label>
                  <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="inpoh"></textarea>
                </div>
                <!-- /.input group -->
                <!-- <div class="form-group">
                  <label>File input</label>
                  <input  type="file" name="file_s">
                </div> -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="upload"">Submit</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->