<?php
   
   include "kon.php";

   if(!isset($_SESSION['sesi'])){
      echo "<script>document.location='index.php?page=diagnosa';</script>";
      exit();
   }

   if(isset($_SESSION['sesi'])){
      $sesi = $_SESSION['sesi'];
   } 
extract($_GET);
extract($_POST);
$qr = mysqli_query($kon,"SELECT * FROM gejala");
  ?>
  <div class="well">
      <div class="media">
      <div class="media-body">
        <h4 class="media-heading">Diagnosa</h4>
           <div class="box-body">
           <form role="form" method="post" enctype="multipart/form-data"  action="index.php?page=aksiku">
                <input type="hidden" name="sesi" value="<?php echo $_SESSION['sesi'];?>">
                <?php
                $no=1;
                foreach ($qr as $data) {
                echo'<div class="form-group">';
                echo $no.'. Apakah anda mengalami <b>'.$data['gejala'].'</b><br>';
                echo "</div>
                <div class='form-group'>
                <select  name='".$data["id"]."' class='form-control' id='exampleFormControlSelect1'>
                  <option>Pilih dengan benar</option>
                  <option value='0'> Tidak </option>
                  <option value='0.2'> Tidak Tahu </option>
                  <option value='0.4'> Sedikit Yakin </option>
                  <option value='0.6'> Cukup Yakin </option>
                  <option value='0.8'> Yakin </option>
                  <option value='1'> Sangat Yakin </option>
                </select>
                </div>";
                 $no++;
                }
                echo '<div class="box-footer">
                <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                </div>
                </form>';
              
              ?>
             
</p>
          
       </div>
    </div>
  </div>