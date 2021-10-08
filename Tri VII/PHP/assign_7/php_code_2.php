<html>
    <head>
        <title>Palindrome String</title>

    </head>
    <body>
        <form action="php_code_2.php" method="Get">
            Enter a string : <input type="text" name="str_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    $str_1 = $_GET['str_1'];
    $str_array = array();
    $length = strlen($str_1);

    for($i =  0; $i < $length; $i++)
        array_push($str_array, $str_1[$i]);

    for($i =  0; $i < $length; $i++)
        $rev[$i] = array_pop($str_array);

    $rev_str = implode($rev);

    if (strcmp($str_1,$rev_str)==0)
        echo"<br>String is palindrome.";
    else
        echo"<br>String is not palindrome.";
    
?>