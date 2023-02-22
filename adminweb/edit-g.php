<?php
include 'koneksi.php';
if(isset($_GET['id'])){
$sql="select * from gejala where id='".$_GET['id']."' ";
$query=mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
}
if (isset($_POST['perbarui'])) {
    $idp   = $_POST['id'];
    $nmp    = $_POST['gejala'];
    $inp = $_POST['inf'];
    
    
    $update = mysqli_query($koneksi,"UPDATE
  `sistem_pakar_cf`.`gejala`
SET
  `id` = '$idp',
  `gejala` = '$nmp',
  `info` = '$inp',
WHERE `id` = '".$_POST['id']."'");
    if (mysqli_affected_rows($koneksi)) {
      echo "<script>location.assign('index.php?page=list-gejala&edit=sukses');</script>";
    }else{
        echo "<script>location.assign('index.php?page=list-gejala&edit=gagal');</script>";
      }
    }
?>
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">gejala</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group">
                  <label>Id gejala</label>
                  <input class="form-control" type="text" name="id" disabled="" value="<?php echo $data['id']; ?>">
                   <input class="form-control" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama gejala</label>
                  <input class="form-control" placeholder="Nama gejala ..."  type="text" name="gejala" value="<?php echo $data['gejala']; ?>">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi gejala</label>
                  <textarea class="form-control" rows="3" placeholder="Deskripsi ..." name="inf"><?php echo $data['info']; ?></textarea>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="perbarui">Submit</button>
              </div>
              </form>
            </div>
