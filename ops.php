<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];

$add=($num1 + $num2);
$sub=($num1 - $num2);
$mul=($num1 * $num2);
$div=($num1 / $num2);

echo "$num1 + $num2 = $add<br>";
echo "$num1 - $num2 = $sub<br>";
echo "$num1 * $num2 = $mul<br>";
echo "$num1 / $num2 = $div";
?>
