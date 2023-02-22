<?php
include "./././koneksi.php";
    if (isset($_POST['upload'])) {
    $idp   = $_POST['id'];
    $nmp    = $_POST['penyakit'];
    $inp = $_POST['inpoh'];
    $sol   = $_POST['sol'];
    // $gambar = strtolower(substr($_FILES['file_s']['name'],-4));
    // $path = "gambar/";
    
    // if (!empty($_FILES["file_s"]["tmp_name"])){
    // $ext=strtolower($_FILES['file_s']['type']); //memeriksa format gambar
    // if($ext=="image/jpeg" || $ext=="image/jpg" || $ext=="image/gif" || $ext=="image/png"){           
         
        //mengupload gambar dan update row table database dengan path folder dan nama image   
        // if (move_uploaded_file($_FILES['file_s']['tmp_name'], $path.basename(($idpro).$gambar))) {
    $sql = mysqli_query($koneksi, "INSERT INTO `sistem_pakar_cf`.`penyakit` (`id`, `nm_p`, `info`, `solusi`)
VALUES
  ('$idp', '$nmp', '$inp', '$sol')");
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
              <h3 class="box-title">Input penyakit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data"  action="">
                <!-- text input -->
                <div class="form-group">                  
                  <input type="hidden" name="no">
                </div>
                <div class="form-group">
                  <label>Id penyakit</label>
                  <input class="form-control" placeholder="Id penyakit ..."  type="text" name="id">
                </div>
                <div class="form-group">
                  <label>Nama penyakit</label>
                  <input class="form-control" placeholder="Nama penyakit ..."  type="text" name="penyakit">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Info penyakit</label>
                  <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="inpoh"></textarea>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Solusi penyakit</label>
                  <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="sol"></textarea>
                </div>
                <div class="form-group">
                <label class="hover">
                  <div class="iradio_flat-green hover" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="radio" name="r3" class="flat-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                  Slide
                </label>
                <br>
                <label class="">
                  <div class="iradio_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;"><input type="radio" name="r3" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                </label>
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