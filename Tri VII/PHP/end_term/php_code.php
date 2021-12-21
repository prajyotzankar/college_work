<html>
<body>
<form action="php_code.php" method="Get">
Menu:<br>

1)Sort in Ascending Order in First Array<br>
2)Sort in Descending Order in Second Array<br>
3)Merge two Arrays and Display them<br>
4)Find Difference of two Arrays<br>
5)Display common elements of two Arrays<br>
6)Replace 1st Array element to 2nd Array element<br>
7) Sum of all Array elements<br>
Enter Choice:<input type="text" name="choice">
<br><input type="Submit"><br>
</form>
</body>
</html>

<?php
$arr1=array(19,20,56,41,1);
$arr2=array(26,41,19,57,4);
$newArray=array();
$choice=$_GET['choice'];

if($choice==1)
{
sort($arr1);
$len=count($arr1);
for($i=0;$i<$len;$i++)
{
echo $arr1[$i]," ";
}
}
else if($choice==2)
{
rsort($arr2);
$rlen=count($arr2);
for($j=0;$j<$rlen;$j++)
{
echo $arr2[$j]," ";
}
}
else if($choice==3){
$newArray=array_merge($arr1,$arr2);
foreach($newArray as $val){
echo $val," ";
}
}
else if($choice==4){
$newArray=array_diff($arr1,$arr2);
foreach($newArray as $val){
echo $val," ";
}
}
else if($choice==5){
$newArray=array_intersect($arr1,$arr2);
foreach($newArray as $val){
echo $val," ";
}
}

else if($choice==6){
$newArray=array_replace($arr1,$arr2);
foreach($newArray as $val){
echo $val," ";
}
}
else if($choice==7){
$s1=array_sum($arr1);
$s2=array_sum($arr2);
echo $s1+$s2;
echo"<br>";
}

else{
echo "Invalid Choice<br>";
}

?>