<?php include 'include/header.php' ?>
    <h1>Date and Time Manipulation</h1>

    <?php
      //getting the date
      $date = getdate();
      echo "Today's Date : <br>";
      echo $date['mday'].'<br>';
      echo $date['mon'].'<br>';
      echo $date['year'].'<br>';

      echo "Today's Date : ".$date['mday'].'/'.$date['mon'].'/'.$date['year'].'<br>';

      echo time();

    ?>
<?php require 'include/footer.php' ?>