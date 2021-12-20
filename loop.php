<?php include 'include/header.php' ?>
    <h1>For Loop</h1>
    <?php
      for($count=0;$count<10;$count++)
      {
          echo '<p> Ibn Issa '.$count.' </p>';
      }
    ?>

    <h1>WHILE LOOP</h1>
    <?php
      
      $grade = 0;
      while($grade < 10)
      {
        echo 'Abu Roslaan';
        echo '<br>';
        $grade++;
      }
    ?>

    <h1>DO WHILE LOOP</h1>
    <?php
       $grade = 0;
       do
       {
           echo 'Ummu Roslaan';
           echo '<br>';

           $grade ++;
       }while($grade < 10 )
    ?>
<?php require 'include/footer.php' ?>