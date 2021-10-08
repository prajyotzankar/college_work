<!DOCTYPE HTML>

<html>
    <head>
        <title>Regular Expression</title>
    </head>
    <body>
        <form action="php_code_7.php" method="Get">
            Enter string : <input type="text" name="str_1"><br><br>
            Enter char/string to repalce : <input type="text" name="pattern_str"><br><br>
            Enter char/string to replace with : <input type="text" name="replace_str"<br><br>
            <input type="Submit"><br><br>
        </form>
    </body>
</html>

<?php
    $string = $_GET["str_1"];
    $pattern = $_GET["pattern_str"];
    $replace = $_GET["replace_str"];

    function replace_str($string, $pattern, $replace){
        $pattern = "/".$pattern."/i";
        echo preg_replace($pattern, $replace, $string);
    }

    replace_str($string, $pattern, $replace);
    
?>