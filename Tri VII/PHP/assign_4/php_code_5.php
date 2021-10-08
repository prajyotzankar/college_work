
<html>
    <head>
        <title>Simple Interest Calculator</title>
    </head>
    <body>
        <form action="php_code_5.php" method="Get">
            Enter Principal Ammount : <input type="text" name="principal"><br><br>
            Enter Rate of Interest  : <input type="text" name="rate"><br><br>
            Enter Time Period       : <input type="text" name="time"><br><br>
            <input type="Submit">
        </form>
    </body>
</html>

<?php

    $principal = $_GET['principal'];
    $rate = $_GET['rate'];
    $time = $_GET['time'];

    function simple_intrest($principal, $time, $rate=15){

        $amount = $principal + (($principal*$rate*$time)/100);
        echo "Amount is $amount";

    }

    if($rate == "")
        simple_intrest($principal, $time);
    else
        simple_intrest($principal, $time, $rate);
?>