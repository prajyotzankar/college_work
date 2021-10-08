<html>
    <head>
        <title>Switch Case</title>
    </head>
    <body>
        <form action="php_code_1.php" method="Get">
            Enter the string : <input type="text" name="str_1"><br><br>
            1 -> Number of vowels using regular expression function<br>
            2 -> Number of consonants using regular expression function<br>
            3 -> Number of digits using regular expression function<br>
            4 -> Number of words<br>
            5 -> Number of characters<br>
            6 -> Display reverse string<br><br>
            Enter the option : <input type="text" name="option"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    $str_1 = $_GET['str_1'];
    $option = $_GET['option'];
    switch($option){
        case 1  :   $vowels = '/[aeiou]/i';
                    $num = preg_match_all($vowels, $str_1, $matches);
                    echo "No of vowels = $num";
                    break;

        case 2  :   $consonants = '/[^aeiuo]/i';
                    $num = preg_match_all($consonants, $str_1, $matches);
                    echo "No of consonants = $num";
                    break;

        case 3  :   $digits = '/[0-9]/i';
                    $num = preg_match_all($digits, $str_1, $matches);
                    echo "No of digits = $num";
                    break;

        case 4  :   echo "No of words = ".str_word_count($str_1);
                    break;

        case 5  :   echo "No of characters = ".strlen($str_1);
                    break;

        case 6  :   echo "Reverse of string = ".strrev($str_1);
                    break;

        default :   echo "Invalid option!!!";

    }

?>