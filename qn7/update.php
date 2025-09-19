<?php
include "db.php";

$oldName=$_POST['oldName'];
$newName=$_POST['newName'];

$query="update students set name='$newName' where name='$oldName'";
mysqli_query($conn, $query);

echo "Successfully updated $name";
?>
