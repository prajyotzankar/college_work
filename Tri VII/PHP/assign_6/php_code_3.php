<html>
    <head>
        <title>Date</title>
    </head>
    <body>
        <form action="php_code_3.php" method="Get">
            Enter the Date(dd-mm-yyyy) : <input type="text" name="date_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    $date_1 = $_GET['date_1'];
    $pattern = '/-/i';
    $component = preg_split($pattern, $date_1, 3, PREG_SPLIT_NO_EMPTY);
    $month_name = date("F", mktime(0, 0, 0, $component[1], 10));
    echo "Day = $component[0] <br>";
    echo "Month = $month_name <br>";
    echo "Year = $component[2] <br>";
?>