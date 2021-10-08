<html>
    <head>
        <title>Odd Even Number</title>
    </head>
    <body>
        <form action="php_code_6.php" method="Get">
            Enter numbers : <input type="text" name="numbers_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    $numbers = array(2, 5, 45, 57, 50, 26, 11, 96);
    $even = 0;
    $odd = 0;
    foreach($numbers as $number){
        if($number%2 == 0)
            $even++;
        else
            $odd++;
    }

    echo "No of even numbers = $even <br>";
    echo "No of odd numbers = $odd <br>";
?>