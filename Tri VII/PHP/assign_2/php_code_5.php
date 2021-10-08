
<html>
    <head>
        <title>Character to ACSII</title>
    </head>
    <body>
        <form action="php_code_5.php" method="Get">
            Enter a character : <input type="text" name="char_1"><br><br>
            <input type="Submit">
        </form>
    </body>
</html>

<?php
    $char_1 = $_GET['char_1'];
    $char_ascii = ord($char_1);
    
    if($char_ascii >= 65 && $char_ascii <= 90)
       echo "Character " .$char_1. " is uppercase with ASCII " .$char_ascii;
    elseif($char_1 >= 48 && $char_1 <= 57)
        echo "Character " .$char_1. " is a number with ASCII " .$char_ascii;
    elseif($char_1 >= 97 && $char_1 <= 122)
        echo "Character " .$char_1. " is lower with ASCII " .$char_ascii;
    else
        echo "Character " .$char_1. " is a special symbol with ASCII " .$char_ascii;


?>