      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id Transaksi</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>                  
                  <th>Harga</th>
                  <th>Total Pembayaran</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                
                <?php

    $qu=mysqli_query($koneksi,"select * from produk order by id_produk ASC");
    while($data=mysqli_fetch_row($qu)){
    echo "<tr>";
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";
    echo "<td>".$data[2]."</td>";
    echo "<td>".$data[3]."</td>";
    echo "<td>".$data[4]."</td>";
    echo "<td style='text-align:center'><a href='index.php?page=list-penjualan&edit=$data[0]'><span title='Edit'><button class='btn btn-info'><span class='fa fa-edit'></span></button><span></a>

    <a href='index.php?page=list-penjualan&del=$data[0]'><span title='Hapus'><button class='btn btn-danger'><span class='fa fa-fw fa-close'></span></button><span></a></td>";
    echo "</tr>";
  }

?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->