<?php include 'include/header.php' ?>
    <?php
     $grade = 'B';

     switch($grade)
     {
         case 'A':
            echo 'Excellent';
            break;
        case 'B':
            echo 'Very Good';
            break;
        default:
          echo 'Doing well';
     }
    ?> 
<?php require 'include/footer.php' ?>