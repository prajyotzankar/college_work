<!DOCTYPE HTML>

<html>
    <head>
        <title>Regular Expression</title>
    </head>
    <body>
        <form action="php_code_6.php" method="Get">
            Enter first string : <input type="text" name="str_1"><br><br>
            Enter second string : <input type="text" name="str_2"><br><br>
            <input type="Submit"><br><br>
        </form>
    </body>
</html>

<?php
    $string_1 = $_GET["str_1"];
    $string_2 = $_GET["str_2"];

    function count_of($string1, $string2){
        $pattern = "/".$string2."/i";
        echo preg_match_all($pattern, $string1);
    }

    count_of($string_1, $string_2);

?>