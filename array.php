<?php include 'include/header.php' ?>
    <h1>Arrays</h1>
    <?php
     //declaring an array
     $numbers = array(1,2,3,4,5,6,7);
     echo $numbers[0].'<br>';

     $size = count($numbers);
     echo "Array Numbers size is $size ".'<br>';

     for($count=0;$count<$size;$count++)
     {
         echo $numbers[$count];
         echo '<br>';
     }
    ?>
<?php require 'include/footer.php' ?>