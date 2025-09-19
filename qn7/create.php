<?php
require "db.php";

$name=$_POST['name'];
$age=$_POST['age'];
$course=$_POST['course'];


$query="insert into students (name, age, course) values ('$name', '$age', '$course')";
mysqli_query($conn, $query);

echo "Successfully added $name";
?>
