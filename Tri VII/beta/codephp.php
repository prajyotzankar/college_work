<html>
    <head>
        <title>Armstrong Number</title>
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
    $total = 0;
    $num = $num_1;

    while($num != 0){
        $rem = $num%10;
        $total += $rem*$rem*$rem;
        $num = $num/10;
    }

    if($num_1 == $total)
        echo "$num_1 is an Armstrong number.";
    else
        echo "$num_1 is not an Armstrong number.";

?>