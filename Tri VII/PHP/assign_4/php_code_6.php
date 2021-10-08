
<html>
    <head>
        <title>Swap using passby reference</title>
    </head>
    <body>
        <form action="php_code_6.php" method="Get">
            Enter first number : <input type="text" name="num_1"><br><br>
            Enter second number  : <input type="text" name="num_2"><br><br>
            <input type="Submit">
        </form>
    </body>
</html>

<?php

    $num_1 = $_GET['num_1'];
    $num_2 = $_GET['num_2'];
    echo "Numbers before swapping first number = $num_1, second number = $num_2 <br><br>";
    function swap_values(&$num1, &$num2){
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
        echo "Numbers after swapping first number = $num1, second number = $num2 <br>";

    }
    swap_values($num_1, $num_2);
?>