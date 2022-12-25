<?php
  include "./utils/db.php";
  $stack_query = "SELECT name, image, datalabel FROM `stack`";
  $stack_result = mysqli_query($conn, $stack_query);
  $stack = [];
  while($stack_row = mysqli_fetch_assoc($stack_result)){
    array_push($stack, $stack_row);
  }

  $projects_query = "SELECT name, category, image, link FROM `projects`";
  $projects_result = mysqli_query($conn, $projects_query);
  $projects = [];
  while($projects_row = mysqli_fetch_assoc($projects_result)){
    array_push($projects, $projects_row);
  }
?>

<section class="content-section" id="content">
        <h2 class="stack-text">STACK</h2>
        <div class="stack-container">
          <?php
            foreach($stack as $item){
              echo "<div class='stack' data-label='$item[datalabel]'>
                      <img src='$item[image]'/>
                      <p>$item[name]</p>
                    </div>";
            }
          ?>
        </div>
        <div class="projects-container">
          <?php 
            foreach($projects as $project){
              echo "<a href='$project[link]' target='_blank'><div class='project'>
                        <div class='project-text'>
                          <p>$project[category]</p>
                          <h2>$project[name]</h2>
                        </div>
                        <div class='project-image'>
                          <img src='$project[image]'/>
                        </div>
                    </div></a>";
            }
          ?>   
        </div>
</section>