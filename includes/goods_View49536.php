
<?php
$table ='<table>';
$table.='<tr>';
$table.='<th>id</th>';
$table.=' <th>Name</th>';
$table.='<th>Price</th>';
$table.='</tr>';
echo $table;
    $i=0;
    while ($i< $num) {
        $rs->data_seek($i);
        $row = $rs->fetch_assoc();
        echo "<tr>";
        echo "<td>".$row["goods_id"]."</td>";
        echo "<td>".$row["goods_name"]."</td>";
        echo "<td>".$row["goods_price"]."</td>";
        echo "</tr>";
        $i++;
    }
echo '</table>';

?>