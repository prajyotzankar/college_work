<html>
    <head>
        <title>Perfect Number</title>
    </head>
    <body>
        <form action="php_code_2.php" method="Get">
            Enter a number : <input type="text" name="num_1"><br><br> 
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    
    $num_1 = $_GET["num_1"];
    $sum = 0;

    for($i = 1; $i < $num_1 ; $i++){
        if($num_1%$i == 0)
            $sum += $i;
    }
    if($sum == $num_1)
        echo "Number $num_1 is a perfect number";
    else
        echo "Number $num_1 is not a perfect number";

?>