<?php
      if(isset($_GET['edit'])=='sukses')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['edit'])=='gagal')
    echo "<div class='alert alert-error' role='alert'>Data Gagal Terupdate</div>";

if (isset($_GET['hapus'])){
  $id_sesi = $_GET['hapus'];
  $del1 = "DELETE FROM v_hasil where id_sesi='$id_sesi'";
  $del = mysqli_query($koneksi, $del1);
  if ($del){
     echo "<div class='alert alert-success' role='alert'>Data Berhasil Terhapus</div>";
   }else{
     echo "<div class='alert alert-error' role='alert'>Data Gagal Terhapus</div>";
   }
}
  ?>
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Laporan</h3>
              <form method="post" action="">
            <br><input type="text" name="input_cari" placeholder="Cari Berdasar id_sesi" />
            <input type="submit" name="cari" value="Cari"/>
            </form>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <table id_sesi="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th><center>Nama</center></th>
                  <th><center>Hasil</center></th>
                  <th><center>Penyakit</center></th>
                  <th><center>Info</center></th>
                  <th><center>Tanggal</center></th>
                </thead>
                <tbody>
                
                
    <?php
    $input_cari = @$_POST['input_cari']; 
    $cari = @$_POST['cari'];
    if($cari) {
    // jika kotak pencarian tid_sesiak sama dengan kosong
    if($input_cari != "") {
    $query=mysqli_query($koneksi,"SELECT * FROM v_hasil WHERE id_sesi LIKE '%$input_cari%'");    
    }else{
      $query=mysqli_query($koneksi,"SELECT * FROM v_hasil ORDER BY id_sesi ASC");
    } 
    }else{
      $query = mysqli_query($koneksi, "SELECT * FROM v_hasil ORDER BY id_sesi ASC");
    }
    if (mysqli_num_rows($query) > 0){
    while($data = mysqli_fetch_array($query)){ 
    echo "<tr>";
    echo "<td>".$data['nama_surveyor']."</td>";
    echo "<td>".$data['hasil']."</td>";
    echo "<td>".$data['penyakit']."</td>";
    echo "<td>".$data['info']."</td>";
    echo "<td>".$data['tgl_survey']."</td>";
    echo "</tr>";
  }
 }
?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
<script>
    function hapus(id_sesi){
       document.getElementByid_sesi('tombol').href="index.php?page=list-v_hasil&hapus="+id_sesi;
    }
</script>
<div class="modal fade" id_sesi="muncul" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hid_sesiden="true">&times;</span></button>
                <h4 class="modal-title">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id_sesi="tombol" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
          </div>
          <!-- /.box -->
              </div>