
<html>
    <head>
        <title>Divisibility test by 5 and 10</title>
    </head>
    <body>
        <form action="php_code_3.php" method="Get">
            Enter a number : <input type="text" name="num_1"><br><br>
            <input type="Submit">
        </form>
    </body>
</html>

<?php
    $num_1 = $_GET['num_1'];
    
    if($num_1%5 == 0)
        if($num_1%10 == 0)
            echo "Number is divisible by 5 and 10";
        else
            echo "Number is only divisible by 5";

    else
        echo "Number is neither divisible 5 nor 10"


?>