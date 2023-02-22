 <div class="well">
      <div class="media">
      <div class="media-body">
        <h4 class="media-heading">Diagnosa</h4>
          <p>
           <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data"  action="">
                <input type="hidden" name="sesi" value='<?php echo $_SESSION["sesi"]; ?>'>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" placeholder="Nama ..."  type="text" name="nama">
                </div>
                <!-- <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenkel">
                    <option value="">Pilih Kategori</option>  
                    <option value="Laki - Laki">Laki - Laki</option>    
                    <option value="Perempuan">Perempuan</option>             
                  </select>
                </div>
                <div class="form-group">
                  <label>Umur</label>
                  <input class="form-control" placeholder="Umur ..."  type="text" name="umur">
                </div> -->

                <!-- /.input group -->
                <!-- <div class="form-group">
                  <label>File input</label>
                  <input  type="file" name="file_s">
                </div> -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="kirim"">Submit</button>
              </div>
              </form>
            </div>
           <!-- <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 10px;"><center>No</center></th>
                  <th><center>Gejala</center></th>
                  <th style="width: 250px;"><center>Aksi</center></th>
                </thead>
                <tbody> -->
                <?php 
if (isset($_POST['kirim'])) {
  extract($_POST);
  $sesi = date('Yhis').rand();
  $_SESSION['sesi'] = $sesi;
  //$dt = mysqli_query($kon,"INSERT INTO tmp (id_sesi,nama_surveyor,jk,umur,tgl_survey) VALUES ('$sesi','$nama','$jenkel','$umur',NOW())");
  $dt = mysqli_query($kon,"INSERT INTO tmp (id_sesi,nama_surveyor,tgl_survey) VALUES ('$sesi','$nama',NOW())");
  if ($dt==true) {
  //echo $sesi;
    echo "<script>document.location='index.php?page=gejala';</script> ";
  }else{
    echo 'Gagal';
  }
}


?>
                 

                <!-- </tbody>
              </table> --></p>
          
       </div>
    </div>
  </div>
