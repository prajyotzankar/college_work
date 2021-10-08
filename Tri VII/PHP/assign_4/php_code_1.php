<html>
    <head>
        <title>Product Page</title>
    </head>
    <body>
        <form action="php_code_1.php" method="Get">
            Customer Name : <input type="text" name="customer_name"><br><br>
            Shipping address : <textarea rows="4" cols="50" name="shipping_address"></textarea><br><br>

            <lable for="item">Select shipping items : </label><br>
            <select name="item[]" multiple="multiple" size="6">
                <option value="CPU"> CPU </option>
                <option value="Motherboard"> Motherboard </option>
                <option value="RAM"> RAM </option>
                <option value="SSD"> SSD </option>
                <option value="HDD"> HDD </option>
                <option value="Monitor"> Monitor </option>
            </select>
            <br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>


<?php
    
    $name = $_GET["customer_name"];
    $address = $_GET["shipping_address"];

    echo "Student Name : $name <br>";
    echo "Student Address : $address <br>";
    echo "Languages : ";
    foreach ($_GET["item"] as $item) {
        echo "$item ";
    }
    echo "<br>";

?>