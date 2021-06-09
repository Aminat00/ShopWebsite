<?php

$table = '<table>';
$table .= '<tr>';
$table .= '<th>ID</th>';
$table .= ' <th>Customer</th>';
$table .= '<th>Name</th>';
$table .= '<th>Quantity</th>';
$table .= '</tr>';
echo $table;
$i = 0;
while ($i < $num) {
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>" . $row["orders_id"] . "</td>";
    echo "<td>" . $row["customers_name"] . "</td>";
    echo "<td>" . $row["goods_name"] . "</td>";
    echo "<td>" . $row["quantity"] . "</td>";
    echo "</tr>";
    $i++;
}
echo '</table>';


?>