<?php
$add = TRUE;
if (isset($_POST['goods_name'])) {$goods_name = $_POST['goods_name'];} else {$add = FALSE;}
if (isset($_POST['goods_price'])) {$goods_price = $_POST['goods_price'];} else {$add = FALSE;}

include 'base.php';

$conn = new mysqli($serwer, $username, $password, $database);

if ($add) {
    $query = "INSERT INTO goods49536(goods_name, goods_price)";
    $query .= "VALUES('".$goods_name."','".$goods_price."')";
    $conn->query($query);
}
include 'goods.php';
?>
