<html>
    <head>
        <title>Product Info</title>
    </head>
    <body>
        <form action="php_code_2.php" method="Get">
            Enter Product number : <input type="text" name="num"><br><br>
            Enter Product Name  : <input type="text" name="pro_name"><br><br>
            Enter Rate       : <input type="text" name="rate"><br><br>
            Enter Quantity       : <input type="text" name="qt"><br><br>

            <input type="Submit">
        </form>
    </body>
</html>

<?php

    $num = $_GET['num'];
    $pro_name = $_GET['pro_name'];
    $rate = $_GET['rate'];
    $qt = $_GET['qt'];

    $total_price = $rate * $qt;

    $myfile = fopen("product.txt", "a");
    $pro_info = "\n$num, $pro_name, $rate, $qt";
    fwrite($myfile, $pro_info);

    $contents = file("product.txt");
    foreach ($contents as $content){
        echo "<br> $content";
    }

    


?>