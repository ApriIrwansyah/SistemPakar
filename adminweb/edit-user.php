<?php
include 'koneksi.php';
if(isset($_GET['user'])){
$sql="select * from user where user='".$_GET['user']."' ";
$query=mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
}
if (isset($_POST['perbarui'])) {    
    $user   = $_POST['username'];
    $pass   = $_POST['password'];
    $nm = $_POST['nama'];
    $jk  = $_POST['jk'];
    $almt = $_POST['alamat'];
    
    
    $update = mysqli_query($koneksi,"update user set user='$user', pass='$pass', nm_user='$nm', jenkel='$jk', alamat='$almt' WHERE user='".$_POST['username']."'");
    if (mysqli_affected_rows($koneksi)) {
      echo "<script>location.assign('index.php?page=list-user&edit=sukses');</script>";
    }else{
        echo "<script>location.assign('index.php?page=list-user&edit=gagal');</script>";
      }
    }
?>
<div class='box box-warning'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Info</h3>

              <div class='box-tools pull-right'>
                <button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i>
                </button>
              </div>
            </div>
            <div class='box-body'>
              Username tidak bisa di ubah, jika mau dirubah silahkan input ulang dan menghapus data sebelumnya.
            </div>
            <!-- /.box-body -->
          </div>
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data">
                <!-- text input -->                
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                <span class="input-group-addon">@</span>
                  <input class="form-control" type="text" name="username" disabled="" value="<?php echo $data['user']; ?>">
                  </div>
                  <input class="form-control" type="hidden" name="username" value="<?php echo $data['user']; ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" placeholder="Password ..."  type="text" name="password" value="<?php echo $data['pass']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" placeholder="Nama Produk ..."  type="text" name="nama" value="<?php echo $data['nm_user']; ?>">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option value="<?php echo $data['jenkel']; ?>"><?php echo $data['jenkel']; ?></option>  
                    <option value="Perempuan">Perempuan</option>    
                    <option value="Laki-Laki">Laki-Laki</option>
                  </select><br>
                  <p><b>*CATATAN</b> : 1 = Perempuan, 0 = Laki-laki</p>
                <!-- textarea -->
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Alamat ..." name="alamat"><?php echo $data['alamat']; ?></textarea>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="perbarui">Submit</button>
              </div>
              </form>
			  </div>