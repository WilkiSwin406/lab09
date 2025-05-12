<?php
include("settings.php");

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['cars_id'] . "</td>";
    echo "<td>" . $row['make'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['yom'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
