<?php
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "exhibition_db"; // Replace with your actual DB name
require_once "settings.php";
$dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);
if ($dbconn) {
    $query = "Select * from cars";
    $result = mysqli_query($dbconn,$query);
    echo "<br>
    <table border='1'>
    <tr>
        <th>ID</th>
        <th>make</th>
        <th>model</th>
        <th>price</th>
        <th>year of make</th>
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>$" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }
            echo "</table>";
}
?>