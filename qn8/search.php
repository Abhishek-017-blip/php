<?php
include "db.php";

$name=$_POST['name'];
$ans=mysqli_query($conn, "select * from students where name='$name'");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Course</th>";
echo "</tr>";

while($row=mysqli_fetch_array($ans)) {
	echo "<tr>";
	echo "<td>$row[name]</td>";
	echo "<td>$row[age]</td>";
	echo "<td>$row[course]</td>";
	echo "</tr>";
}
echo "</table>";
?>
