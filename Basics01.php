<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
             echo "hello world";
             //single line comment
             /*
             This is multi line comment
             */

             $variable1 = 18; //creating variable
             $variable2 = 07;
             echo $variable1;
            
             echo $variable1 + $variable2;

             //Operators in PHP
             /* arithmetic, assignment, comparsion
             increment/decrement, logical */
             echo "<br>";
             echo "The value of variable1 + variable2 is ";
             echo "<br>";
             echo $variable1 + $variable2;
             echo "<br>";


             $newvar = $variable1;
             $newvar += 1;
             echo "the value of new variable is ";
             echo $newvar;
             echo "<br>"; 

             //echo "<h1> Comparsion operator </h1>"
             echo "The value of 1==4 is ";
             echo var_dump(1==4); //variable tyep or value it returns
             
             //increment/decrement operators
             echo $variable1++;
             echo "<br>"; 
             echo ++$variable2; //here value will increase by 1

             //logical operators
             echo "<br>";
             $myVar = (true) && (true);
             echo var_dump($myVar);


             //data types
             echo "<br>";
             $var = "This is a string";
             echo var_dump($var);
             


        ?>
    </div>
</body>
</html>