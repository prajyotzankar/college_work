<!DOCTYPE HTML>

<html>
    <head>
        <title>Count vowels and consonant </title>
    </head>
    <body>
        <form action="php_code_4.php" method="Get">
            Enter a string : <input type="text" name="str_1"><br><br>
            <input type="Submit"><br><br>
        </form>
    </body>
</html>

<?php

    
    $string = $_GET['str_1'];

    function count_vowel($string){
        $vowel = 0;
        $consonants = 0;
        $len = strlen($string);

        $vowels = array("A", "a", "E", "e", "I", "i", "O", "o", "U", "u");
        
        for($i = 0 ; $i < $len ; $i++){
            if (in_array($string[$i], $vowels)){
                $vowel += 1;
            }
            else
                $consonants += 1;
        }
        echo "No of vowels = $vowel<br>";
        echo "No of consonants = $consonants <br>";
    }
    count_vowel($string);
?>
