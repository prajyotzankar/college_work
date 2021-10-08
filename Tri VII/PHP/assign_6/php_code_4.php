<html>
    <head>
        <title>Case Conversion</title>
    </head>
    <body>
        <form action="php_code_4.php" method="Get">
            Enter the string : <input type="text" name="str_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    $str_1 = $_GET['str_1'];

    if(ctype_upper($str_1)){
        echo strtolower($str_1);
    }
    else if(!ctype_upper($str_1)){
        echo strtoupper($str_1);
    }
?>