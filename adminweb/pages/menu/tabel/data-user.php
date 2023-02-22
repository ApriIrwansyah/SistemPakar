      <?php
      if(isset($_GET['edit'])=='sukses')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['edit'])=='gagal')
    echo "<div class='alert alert-error' role='alert'>Data Gagal Terupdate</div>";

if (isset($_GET['hapus'])){
  $id = $_GET['hapus'];
  $del = mysqli_query($koneksi, "DELETE FROM user where username='$id'");
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
              <h3 class="box-title">Data User</h3>
              <form method="post" action="">
            <br><input type="text" name="input_cari" placeholder="Cari Berdasar Username" />
            <input type="submit" name="cari" value="Cari"/>
            </form>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>                  
                  <th><center>Username</center></th>
                  <th><center>Password</center></th>                  
                  <th><center>Nama</center></th>
                  <th><center>Jenis Kelamin</center></th>
                  <th><center>Alamat</center></th>
                  <th><center>Action</center></th>
                </thead>
                <tbody>
                
                
                <?php
    $input_cari = @$_POST['input_cari']; 
    $cari = @$_POST['cari'];
    if($cari) {
    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    $query=mysqli_query($koneksi,"SELECT * FROM user WHERE nm_user LIKE '%$input_cari%'");    
    }else{
      $query=mysqli_query($koneksi,"SELECT * FROM user ORDER BY nm_user ASC");
    }
    }else{
      $query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY nm_user ASC");
    }
    if (mysqli_num_rows($query) > 0){
    while($data = mysqli_fetch_array($query)){ 
    echo "<tr>";    
    echo "<td>".$data['user']."</td>";
    echo "<td>".$data['pass']."</td>";
    echo "<td>".$data['nm_user']."</td>";
    echo "<td>".$data['jenkel']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td style='text-align:center'><a href='index.php?page=editusr&user=".$data['user']."'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-info'><span class='fa fa-edit'></span></button><span></a>

    <span data-placement='top' data-toggle='tooltip' title='Hapus'><button 
    onClick='hapus(\"".$data['user']."\")' data-target='#muncul' class='btn btn-danger' data-toggle='modal'><span class='fa fa-fw fa-close'></span></button><span></a></td>";
    echo "</tr>";
  }
 }
?>
                </tbody>
              </table><br>
              <pre><b>*CATATAN</b> : 1 = Perempuan
           0 = Laki-laki</pre>
            </div>
            <!-- /.box-body -->
<script>
    function hapus(username){
       document.getElementById('tombol').href="index.php?page=list-user&hapus="+username;
    }
</script>
<div class="modal fade" id="muncul" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="tombol" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
          </div>
          <!-- /.box -->
              </div>