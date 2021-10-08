<html>
    <head>
        <title>Replace String</title>
    </head>
    <body>
        <form action="php_code_2.php" method="Get">
            Enter the string : <input type="text" name="str_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    $str_1 = $_GET['str_1'];
    echo preg_replace('/hi/i', 'HI', $str_1 );
?>