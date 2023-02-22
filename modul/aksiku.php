<?php 
include 'kon.php'; 
extract($_GET);
extract($_POST);
if ($page=='aksiku') {
    if (isset($_POST['upload'])){

    #Penyakit Kanker Otak
    $a1 = $G01*1;
    $a2 = $G02*0.8; 
    $a3 = $G03*0.8; 
    $a4 = $G04*0.4; 
    $a5 = $G05*0.6; 
    $a10 = $G10*0;
    $a11 = $G11*0.6;

    #combine &old
    $old = round($a1+$a2*(1-$a1),4); 
    $old1 = round($old+$a3*(1-$old),4);
    $old2 = round($old1+$a4*(1-$old1),4);
    $old3 = round($old2+$a5*(1-$old2),4);
    $old4 = round($old3+$a11*(1-$old3),4);
    $penyakit1 = $old4*100;
    $npenyakit1 = "Kanker Otak";
 
    #Penyakit Radang Otak
    $a1 = $G01*1; 
    $a2 = $G02*0.8; 
    $a4 = $G04*0.6; 
    $a6 = $G06*0.8; 
    $a7 = $G07*0.8; 
    $a8 = $G08*0.6; 
    $a11 = $G11*0.4;

    #combine &old
    $old = round($a1+$a2*(1-$a1),4); 
    $old1 = round($old+$a4*(1-$old),4);
    $old2 = round($old1+$a6*(1-$old1),4);
    $old3 = round($old2+$a7*(1-$old2),4);
    $old4 = round($old3+$a8*(1-$old3),4);
    $old5 = round($old4+$a11*(1-$old4),4);
    $penyakit2 = $old5*100;
    $npenyakit2 = "Radang Otak";

    #Penyakit Migrain
    $a1 = $G01*0.6; 
    $a6 = $G06*0.6; 
    $a9 = $G09*1;  
    $a11 = $G11*0.8;

    #combine &old
    $old = round($a1+$a6*(1-$a1),4); 
    $old1 = round($old+$a9*(1-$old),4);
    $old2 = round($old1+$a11*(1-$old1),4);
    $penyakit3 = $old2*100;
    $npenyakit3 = "Migrain";

    #Penyakit Vertigo
    $a1 = $G01*0.6;  
    $a5 = $G05*0.6; 
    $a10 = $G10*1; 
    $a11 = $G11*0.8;

    #combine &old
    $old = round($a1+$a5*(1-$a1),4); 
    $old1 = round($old+$a10*(1-$old),4);
    $old2 = round($old1+$a11*(1-$old1),4);
    $penyakit4 = $old2*100;
    $npenyakit4 = "Vertigo";

    $data = array($npenyakit1 => $penyakit1, 
        $npenyakit2 => $penyakit2, 
        $npenyakit3 => $penyakit3, 
        $npenyakit4 => $penyakit4); 
    echo '<div class="well">
      <div class="media">
        <a class="pull-left" href="#">
            <span class="glyphicon glyphicon-asterisk"></span>
        </a>
        <div class="media-body">
            <h4 class="media-heading">Hasil Diagnosa</h4>
          <p class="text-right">By Kelompok 1</p>';

$max = (max($data));
$nama = array_keys($data,$max);
if (isset($_POST['upload'])) {
    mysqli_query($kon,"INSERT INTO hasil (id_sesi,nm_p,hasil_survey) VALUES ('$sesi','$nama[0]','$max')");
    $hasil = mysqli_fetch_array(mysqli_query($kon,"SELECT * FROM v_hasil WHERE id_sesi='$sesi' LIMIT 1")); 
    $hasil2 = mysqli_fetch_array(mysqli_query($kon,"SELECT * FROM tmp WHERE id_sesi='$sesi' LIMIT 1")); 
    echo "<p>Halo.. ";   
    echo $hasil['nama_surveyor']."<br> Pada Tanggal dan waktu ".$hasil['tgl_survey'];
    echo "<br>Gejala yang di diagnosa sbg berikut : </p><br>";
    $no = 1;
    foreach($data as $key => $value) {
        echo $no.". <span>Penyakit $key Bernilai $value% </span><br>";
        $no++;

    }
    echo "<p>Berdasarkan data tersebut, kemungkinan terbesar anda terkena penyakit <strong>".$nama[0]."</strong> dengan nilai  <strong>".$max."%</strong></p>
        <!-- <p>Solusi: ".$hasil['solusi']."</p><br>
        <a href='index.php?page=aksiku'> 
        <button onClick='window.print();'>Print</button> 
        </a>-->

    <ul class='list-inline list-unstyled'>
            <li>
               <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star'></span>
                        <span class='glyphicon glyphicon-star-empty'></span>
            </li>
            <li>|</li>
            </ul>
       </div>
    </div>
  </div>";
    
}else{
    if (isset($_SESSION['sesi'])) {
    session_destroy();
    echo "<script>document.location='index.php?page=diagnosa';</script>";
} 
}

 }
}
?>