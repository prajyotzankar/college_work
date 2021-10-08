<html>
    <head>
        <title>Variable Function</title>
    </head>
    <body>
        <form action="php_code_1.php" method="Get">
            Enter a number : <input type="text" name="num_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>


<?php
    
    $num_1 = $_GET["num_1"];
    function sum_digits($num_1){
        $num_copy = $num_1;
        $sum = 0;
        while($num_copy > 0){
            $sum += $num_copy%10;
            $num_copy /= 10;
        }
        echo "Sum of digits : $sum";
    }

    $sumDigits = 'sum_digits';
    $sumDigits($num_1);

?>