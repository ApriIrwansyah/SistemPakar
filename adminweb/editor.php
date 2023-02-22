<?php
include 'koneksi.php';
if(isset($_GET['id'])){
$sql="select * from penyakit where id='".$_GET['id']."' ";
$query=mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
}
if (isset($_POST['perbarui'])) {
    $idp   = $_POST['id'];
    $nmp    = $_POST['penyakit'];
    $inp = $_POST['inpoh'];
    $sol   = $_POST['sol'];
    
    
    $update = mysqli_query($koneksi,"UPDATE
  `sistem_pakar_cf`.`penyakit`
SET
  `id` = '$idp',
  `nm_p` = '$nmp',
  `info` = '$inp',
  `solusi` = '$sol'
WHERE `id` = '".$_POST['id']."'");
    if (mysqli_affected_rows($koneksi)) {
      echo "<script>location.assign('index.php?page=list-penyakit&edit=sukses');</script>";
    }else{
        echo "<script>location.assign('index.php?page=list-penyakit&edit=gagal');</script>";
      }
    }
?>
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">penyakit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group">
                  <label>Id penyakit</label>
                  <input class="form-control" type="text" name="id" disabled="" value="<?php echo $data['id']; ?>">
                   <input class="form-control" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Penyakit</label>
                  <input class="form-control" placeholder="Nama Penyakit ..."  type="text" name="penyakit" value="<?php echo $data['nm_p']; ?>">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi Penyakit</label>
                  <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="inpoh"><?php echo $data['info']; ?></textarea>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Solusi Penyakit</label>
                  <textarea class="form-control" rows="3" placeholder="Solusi ..." name="sol"><?php echo $data['solusi']; ?></textarea>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="perbarui">Submit</button>
              </div>
              </form>
            </div>
