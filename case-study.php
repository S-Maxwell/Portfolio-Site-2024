<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');


$query = 'SELECT projects.id AS project_id, projects.project_name, projects.project_category, projects.project_thumbnail, projects.image_alt, projects.case_info, projects.duration, GROUP_CONCAT(DISTINCT skills.skill_name) AS skills, GROUP_CONCAT(DISTINCT media.media_path) AS media FROM projects, skills, media, project_skill WHERE project_skill.project_id = projects.id AND project_skill.skill_id = skills.id AND media.project_id = projects.id AND projects.id = '.$_GET['id'].' GROUP BY projects.id';



$results = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($results);

$image_array = explode(',', $row['media']);


?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  echo'
  <title>'.$row['project_name'].'</title>'
  ?>
  <link rel="stylesheet" href="index.html">
  <link href="css/grid.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">


</head>
<body>
  <header class="hero-main col-span-full">
    <div class="grid-con">
      <div class="side-menu col-span-full">
          <div class="side-menu-content">
              <a href="index.php"><img src="images/home-icon-grey.svg" alt="Home"></a>
          </div>
          <div class="underline"></div>
          <div class="side-menu-content">
              <a href="#about"><img src="images/user-icon.svg" alt="About"></a>
          </div>
          <div class="underline"></div>
          <div class="side-menu-content">
              <a href="#projects"><img src="images/project-icon.svg" alt="Projects"></a>
          </div>
          <div class="underline"></div>
          <div class="side-menu-content">
              <a href="#reviews"><img src="images/reviews-icon.svg" alt="Reviews"></a>
          </div>
          <div class="underline"></div>
          <div class="side-menu-content">
              <a href="#contact"><img src="images/contact-icon.svg" alt="Contact"></a>
          </div>
      </div>
  </div>
    <!-- <h1>Rebranding Quatro</h1> -->
    <?php
    echo '
         <h1>' . $row['project_name'] . '</h1>
        <img src="images/' . $row['project_thumbnail'] . '" alt="Quatro Drink">
        <p>' . $row['case_info'] . '</p>
    ';
?>
    
  </header>

  <main>
     <!-- Overview Section -->
      <?php
      echo'<section class="overview col-span-full l-col-start-5 l-col-span-6">
    <h2>Project Overview</h2>
    <ul>
      <li><strong>Objective:</strong> ' . $row['project_name'] . '</li>
      <li><strong>Role:</strong> ' . $row['project_category'] . '</li>
      <li><strong>Tools Used:</strong> ' . $row['skills'] . '</li>
      <li><strong>Duration:</strong> ' . $row['duration'] . '</li>
    </ul>
  </section>'
      ?>
  

   <!-- Challenge Section -->
    <?php
    echo'<section class="challenge col-span-full">
    <h2>The Challenge</h2>
    <p>' . $row['case_info'] . '</p>
  </section>'
    ?>
   

  <!-- Research & Inspiration -->
   <?php
   echo'<section class="research col-span-full">
    <h2>Research &amp; Inspiration</h2>
    <p>Details about target audience, competitor analysis, and mood boards.</p>
    <img src="images/'.$image_array[1].'" alt="Mood Board">
  </section>

   '
   ?>
  
  <!-- Design Process -->
   <?php
   echo'<section class="process col-span-full">
    <h2>Design &amp; Process</h2>
    <div class="design-elements">
      <div>
        <!-- <h3>Logo Redesign</h3> -->
        <!-- <img src="images/logo-before.png" alt="Before Logo"> -->
        <img src="images/'.$image_array[0].'" alt="Mood Board">
      </div>
      <div>
        <!-- <h3>Label Design</h3> -->
        <img src="images/'.$image_array[1].'" alt="Mood Board">
      </div>
      <div>
        <!-- <h3>Website Mockup</h3> -->
        <img src="images/'.$image_array[1].'" alt="Mood Board">
      </div>
    </div>
  </section>'
   ?>
  

  <!-- Final Deliverables -->
  <section class="deliverables col-span-full">
    <h2>Final Deliverables</h2>
    <p>Showcase images and videos of the rebranding.</p>
  </section>

  <section>
  <div class="project-video col-span-full">
    <h3>Project Highlights</h3>
    <p>Watch the video below to see an overview of the Quatro project:</p>
    <br>
    <video controls width="800">
      <source src="video/Maxwell_Sashoye_FIP.mp4" type="video/mp4" />
      <source src="path-to-video.webm" type="video/webm" />
      <p>Your browser does not support HTML video. Please <a href="path-to-video.mp4">download the video</a> to view it.</p>
    </video>
  </div>
  </section>

  <!-- Reflection Section -->
  <section class="reflection col-span-full">
    <h2>Reflection</h2>
    <p>Lessons learned and challenges overcome.</p>
  </section>

  

  </main>

  <footer class="cta col-span-full">
    <h2>Let’s work together!</h2>
    <p>Explore more projects or contact me to collaborate.</p>
    <a href="#" class="btn">Contact Me</a>
    <p>&copy; 2024 Sashoye Maxwell. All rights reserved.</p>
  </footer>
</body>
</html>
