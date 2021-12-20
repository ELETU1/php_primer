<?php include 'include/header.php' ?>
    <h1>Php String Manipulation</h1>
    <?php
      $phase1 = "student who came late";
      $phase2 = "in class, stand with rock";

      echo $phase1 ." ". $phase2.'<br>';
      echo '<hr>';
      //transformation
      $name = "ibn issa";
      echo 'Upper Case First Letter : '.ucfirst($name).'<br>';
      echo 'Upper Case First Letter Word : '.ucwords($name).'<br>';
      echo 'Upper Case  : '.strtoupper($name).'<br>';
      echo '<hr>';
      echo'Repeat String :'.str_repeat($name,5).'<br>';
      echo '<hr>';
      echo 'Substring : '.substr($name,4,9).'<br>';
      echo '<hr>';
      echo 'Get Position : '.strpos($name,'b').'<br>';
    ?>
  <?php require 'include/footer.php' ?>>