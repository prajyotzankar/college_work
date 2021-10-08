<!DOCTYPE HTML>

<html>
    <head>
        <title>Anonymous Function</title>
    </head>
    <body>
        <form action="php_code_3.php" method="Get">
            Enter Length : <input type="text" name="length"><br><br>
            Enter Width : <input type="text" name="width"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    $length = $_GET["length"];
    $width = $_GET["width"];

    $area_of_rect = function($length, $width){
        return $length*$width;
    };

    echo "Area of rectangle = ", $area_of_rect($length, $width);
?>