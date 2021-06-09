<?php
$add = TRUE;
if (isset($_POST['customers_id'])) {$customers_id = $_POST['customers_id'];} else {$add = FALSE;}
if (isset($_POST['goods_id'])) {$goods_id = $_POST['goods_id'];} else {$add = FALSE;}
if (isset($_POST['quantity'])) {$quantity = $_POST['quantity'];} else {$add = FALSE;}

include "base.php";
$br = "<br/>";
$conn = new mysqli($serwer, $username, $password, $database);

$conn = new mysqli($serwer, $username, $password, $database);
if ($add) {
    $query = "INSERT INTO orders(customer_id, goods_id, quantity)";
    $query .= "VALUES('".$customers_id."','".$goods_id."','".$quantity."')";
    $conn->query($query);
}
$query = "select customers49536.customers_name, customers49536.customers_adress, goods49536.goods_name, orders_id quantity from orders49536  left join (customers49536, goods49536) on (orders49536.customers_id=customers49536.customers_id and orders49536.goods_id=goods49536.goods_id)";
$rs = $conn->query($query);
$num = $rs->num_rows;
$conn->close();

?>
