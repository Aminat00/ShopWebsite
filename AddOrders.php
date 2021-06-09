<!DOCTYPE html>
<?php include 'includes/head.php' ?>
<?php include 'includes/orders.php' ?>
<html>
<body>
<h1>Welcome to TechStore</h1>
<h3>Add orders</h3>
<?php include 'includes/nav.php' ?>


<form action="ViewOrders.php" method="POST">
    <table>
        <tr><td>Customer</td><td>The name of the good</td> <td>Quantity</td> </tr>
        <tr>
            <td><select name="customers_id">
                <?php
                    $i=0;
                    while ($i<$numCustomer){
                    $rsCustomer->data_seek($i);
                $row=$rsCustomer->fetch_assoc();
                echo "<option value=".$row["customers_id"].">".$row["customers_name"]."</option>";
                $i++;
                    }
                ?>
                </select> </td>
            <td><select name="goods_id" >
                <?php
                $i=0;
                while($i<$numGoods){
                    $rsGoods->data_seek($i);
                    $row=$rsGoods->fetch_assoc();
                    echo "<option value=".$row["goods_id"].">".$row["goods_name"]."</option>";
                    $i++;
                }
                ?>
                </select></td>
            <td><input type="number"  name="quantity"></td>
        </tr>
        <tr><td></td><td><input type="submit" value="Submit"></td><td></td></tr>
    </table>
</form>
</body>
</html>
