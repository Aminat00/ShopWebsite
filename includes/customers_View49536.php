<?php

$table = '<table>';
$table .= '<tr>';
$table .= '<th>ID</th>';
$table .= ' <th>Name</th>';
$table .= '<th>Address</th>';
$table .= '</tr>';
echo $table;
$i = 0;
while ($i < $num) {
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>" . $row["customers_id"] . "</td>";
    echo "<td>" . $row["customers_name"] . "</td>";
    echo "<td>" . $row["customers_adress"] . "</td>";
    echo "</tr>";
    $i++;
}
echo '</table>';


?>