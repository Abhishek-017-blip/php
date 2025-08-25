<?php
$students = ["Alan" => 20, "Abishek" => 15, "Jesvin" => 18, "Adityan" => 21, "Anjo" => 22];

function printTable($data, $title) {
    echo "<h2>$title</h2>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Name</th><th>Marks</th>";
    echo "</tr>";

    foreach ($data as $name => $marks) {
        echo "<tr>";
        echo "<td>$name</td><td>$marks</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}

printTable($students, "Original Table");

ksort($students);
printTable($students, "Sorted by Name (ksort)");

asort($students);
printTable($students, "Sorted by Marks (asort)");
?>
