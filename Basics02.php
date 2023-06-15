<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Learning PHP</h1>
        This is conatiner
        <?php
          $age = 21;
          echo "<br>";
          if($age>18){
            echo "You can Vote";
          }
          else{
            echo "you can't";
          }
          echo "<br>";
 
          //Arrays in PHP
          $languages = array("Python", "C++");
          echo $languages[0];
          echo count($languages);

          //Loops in PHP
          $a = 0;
          while ($a <= 10){
            echo "<br> Value of a is:";
            echo $a;
            $a++;
          }

          //Do while loop
          $a = 200;
          do {
            echo "<br>Value of a: ";
            echo $a;
            $a++;
          } while ($a < 10);

          //For Loop
          $a = 200;
          for($a=0; $a <10; $a++){
            echo "<br> Value of a is: ";
            echo $a;
          }

          //function
          function print5(){
            echo "FIVE";
          }
          print5();
          function print_number($number){
            echo "<br>Your number is ";
            echo $number;
          }
          print_number(18);
        ?>

    </div>
    
</body>
</html>