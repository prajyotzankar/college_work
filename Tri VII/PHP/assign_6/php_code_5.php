<html>
    <head>
        <title>Number of characters</title>
    </head>
    <body>
        <form action="php_code_5.php" method="Get">
            Enter the string : <input type="text" name="str_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    $str_1 = $_GET['str_1'];
    $words = explode(" ",$str_1);
    foreach($words as $key => $word){
        echo "No of char in $word = ".strlen($word);
        echo "<br>";
    }
?>