<?php
  if(isset($_GET['penjelasan'])) { 
  $query = mysqli_query ($koneksi, "Select * from penyakit where id='".$_GET['penyakit']."'");
  $data = mysqli_fetch_array ($query);
      
    echo '<li class="active"> '.$data['nama'].' </li>';
    echo '<li class="active"> <span class="divider">/</span> '.$data['nama'].'</li>';
  }
    ?>
  <div class="well">
      <div class="media">
        <a class="pull-left" href="#">
        
      </a>
      <div class="media-body">
        <h4 class="media-heading">Selamat Datang </h4>
          <p class="text-right">By Kelompok 1</p>
          <p>Sakit kepala adalah rasa sakit yang muncul di sekitar kepala. Sebagian besar sakit kepala yang terjadi tidak serius dan bisa diatasi dengan mudah, seperti dengan meminum obat pereda sakit, minum air putih yang cukup, dan lebih banyak istirahat. Tapi ada beberapa jenis sakit kepala yang memerlukan penanganan lebih karena berkelanjutan atau bahkan ada yang bisa membahayakan nyawa.

      <br>
      Sakit kepala tidak memiliki jangka waktu tertentu, bisa berlangsung kurang dari satu jam atau bahkan selama beberapa hari, serta  bisa muncul secara tiba-tiba atau perlahan-lahan</p>
        <br>
Penyebab sakit kepala bisa diakibatkan oleh berbagai hal, namun secara umum sakit kepala bisa dikelompokkan berdasarkan penyebabnya, yaitu sakit kepala yang tidak terkait dengan penyakit lain atau disebut dengan sakit kepala primer dan sakit kepala yang diakibatkan oleh penyakit lain atau disebut juga sakit kepala sekunder.</p>
          <ul class="list-inline list-unstyled">
            <li>
               <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
            </li>
            <li>|</li>
      </ul>
       </div>
    </div>
  </div>
