
<html>
    <head>
        <title>Area of Circle</title>
    </head>
    <body>
        <form action="php_code_2.php" method="Get">
            Enter Radius : <input type="text" name="radius"><br><br>
            <input type="Submit">
        </form>
    </body>
</html>

<?php
    $radius = $_GET['radius'];
    define("pi", 3.14);

    $area = pi * $radius * $radius;
    echo "Area of Circle is $area";
?>