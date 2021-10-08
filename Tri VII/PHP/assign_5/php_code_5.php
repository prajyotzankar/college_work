<!DOCTYPE HTML>

<html>
    <head>
        <title>Count vowels and consonant </title>
    </head>
    <body>
        <form action="php_code_5.php" method="Get">
            Enter a string : <input type="text" name="str_1"><br><br>
            <input type="Submit"><br><br>
        </form>
    </body>
</html>

<?php
    $string = $_GET['str_1'];

    function palindrome($string){
        if(strcmp($string, strrev($string)) == 0)
            echo "The string is palindrome <br>";
        else
            echo "The string is not palindrome <br>";
    }

    palindrome($string);
?>