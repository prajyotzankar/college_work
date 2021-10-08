<html>
    <head>
        <title>Alphabates</title>
    </head>
    <body>
        <form action="php_code_2.php" method="Get">
            Enter a char : <input type="text" name="char_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    function checkChar($char_1){

        $haystack = array("A", "a", "E", "e", "I", "i", "O", "o", "U", "u");
        
        if (in_array($char_1, $haystack)){
           echo "$char_1 is vowel <br>"; 
        }
        else{
            if($char_1 >= 'a' && $char_1 <= "z"){
                echo "$char_1 is lowercase consonant";
            }
            else{
                echo "$char_1 is uppercase consonant";
            }
        }
    }

    $char = $_GET['char_1'];
    checkChar($char);

?>