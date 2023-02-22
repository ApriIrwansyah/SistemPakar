<?php
include 'kon.php';
?>
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<span class="glyphicon glyphicon-asterisk"></span>
  		</a>
  		<div class="media-body">
        <?php $p1 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM penyakit where id = 'P01'")); ?>
    		<h4 class="media-heading"><?php echo $p1['nm_p'];  ?></h4>
          <p class="text-right">By Kelompok 1</p>
          <p><?php echo $p1['info'];?></p>
          <p><?php echo $p1['solusi'];?></p>
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

  <div class="well">
      <div class="media">
        <a class="pull-left" href="#">
        <span class="glyphicon glyphicon-asterisk"></span>
      </a>
     <div class="media-body">
        <?php $p2 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM penyakit where id = 'P02'")); ?>
        <h4 class="media-heading"><?php echo $p2['nm_p'];  ?></h4>
          <p class="text-right">By Kelompok 1</p>
          <p><?php echo $p2['info'];?></p>
          <p><?php echo $p2['solusi'];?></p>
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

  <div class="well">
      <div class="media">
        <a class="pull-left" href="#">
        <span class="glyphicon glyphicon-asterisk"></span>
      </a>
      <div class="media-body">
        <?php $p3 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM penyakit where id = 'P03'")); ?>
        <h4 class="media-heading"><?php echo $p3['nm_p'];  ?></h4>
          <p class="text-right">By Kelompok 1</p>
          <p><?php echo $p3['info'];?></p>
          <p><?php echo $p3['solusi'];?></p>
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

  <div class="well">
      <div class="media">
        <a class="pull-left" href="#">
        <span class="glyphicon glyphicon-asterisk"></span>
      </a>
      <div class="media-body">
        <?php $p4 = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM penyakit where id = 'P04'")); ?>
        <h4 class="media-heading"><?php echo $p4['nm_p'];  ?></h4>
          <p class="text-right">By Kelompok 1</p>
          <p><?php echo $p4['info'];?></p>
          <p><?php echo $p4['solusi'];?></p>
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
