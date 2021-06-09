<?php
include "base.php";
$br="<br/>";
$conn=new mysqli($serwer,$username,$password, $database);
$queryCustomer= "SELECT * FROM customers49536";
$rsCustomer=$conn->query($queryCustomer);
$numCustomer=$rsCustomer->num_rows;
$queryGoods= "SELECT * FROM goods49536";
$rsGoods=$conn->query($queryGoods);
$numGoods=$rsGoods->num_rows;
?>