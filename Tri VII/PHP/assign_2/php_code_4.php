
<html>
    <head>
        <title>Percentage to Grade</title>
    </head>
    <body>
        <form action="php_code_4.php" method="Get">
            Enter the Percentage : <input type="text" name="percent_1"><br><br>
            <input type="Submit">
        </form>
    </body>
</html>

<?php
    $percent_1 = $_GET['percent_1'];
    
    if($percent_1 > 100 || $percent_1 < 0)
       echo "Please enter a valid Percentage!!!";
    elseif($percent_1 >= 70)
        echo "Grade for " .$percent_1. "% is O";
    elseif($percent_1 >= 60)
    echo "Grade for " ,$percent_1. "% is A";
    elseif($percent_1 >=40)
    echo "Grade for " ,$percent_1. "% is B";
    else
    echo "Grade for " ,$percent_1. "% is C";

?>