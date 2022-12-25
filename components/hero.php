<?php
  include "./utils/db.php";
  $query = "SELECT name, aboutme, image FROM `user`";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $aboutme = $row['aboutme'];
  $image = $row['image'];

  $query = "SELECT name FROM `profs`";
  $result = mysqli_query($conn, $query);
  $profs = [];
  while($row = mysqli_fetch_assoc($result)){
    array_push($profs, $row['name']);
  }
?>

<section class="hero-section">
    <div class="hero-text">
      <h1 class="stroke shadow">Hi, I'm <?=$name?></h1><br/>
        <span class="sliding-texts">
          <?php 
            foreach($profs as $prof){
              echo "<span class='sliding-text'>$prof</span>";
            }
          ?>
        </span>
        <p><?=$aboutme?></p>
    </div>
    <div class="hero-image">
      <img src="<?=$image?>" draggable="false">
    </div>
</section>