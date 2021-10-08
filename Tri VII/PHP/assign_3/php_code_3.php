<html>
    <head>
        <title>Factorial of a Number</title>
    </head>
    <body>
        <form action="php_code_3.php" method="Get">
            Enter a number : <input type="text" name="num_1"><br><br> 
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    
    $num_1 = $_GET["num_1"];
    $fact = 1;

    if($num_1 >= 0){
        for($i = 1 ; $i <= $num_1 ; $i++)
            $fact *= $i;
        echo "Factorial of $num_1 is $fact"; 
    }
    else
        echo "Please a positive number";
    
    
?>