<?php
$student = array(array("Amit",20,85,"B"),
                array("Mansi",21,90,"A"),
                array("Sumit",22,95,"A"),
                array("Amay",19,67,"C"),
                array("Mayuri",23,75,"B"));

for ($i=0; $i < 5; $i++){ 
    for ($j=0; $j < 4 ; $j++)
        echo " ",$student[$i][$j];
    echo"<br>";
}
?>