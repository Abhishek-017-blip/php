<?php
include "db.php";

$name=$_POST['name'];

$query="delete from students where name='$name'";
mysqli_query($conn, $query);

echo "Successfully deleted $name";
?>
