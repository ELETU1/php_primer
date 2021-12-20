<?php include 'include/header.php' ?>
    <h1>Function</h1>

    <?php
     //defining a function
     function writeMessage()
     {
         echo "Abu Roslaan is doing well <br><br>";
     }

     //calling the function
     writeMessage();

     //function with parameters
     function addNum($num1,$num2)
     {
        $num = $num1 + $num2;
        echo "The sum of $num1 and $num2 is $num <br><br>";
     }

     //calling the function with parameter
     addNum(20,40);

     $num = 500;
     //writing a function to change the value above by passing through reference
     function changeNum(&$num){
         $num = $num + 10;
     }
     //calling the function
     changeNum($num);
     echo $num.'<br><br>';

     //creating a returning function
     function returnProduct($num1,$num2)
     {
         $prod = $num1 * $num2;
         return $prod;
     }
     //calling the function
     $return_value = returnProduct(10,200);
     echo $return_value;
    ?>
<?php require 'include/footer.php' ?>