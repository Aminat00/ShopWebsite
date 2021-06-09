<?php
$add = TRUE;
if (isset($_POST['customers_name'])) {$customers_name = $_POST['customers_name'];} else {$add = FALSE;}
if (isset($_POST['customers_adress'])) {$customers_adress = $_POST['customers_adress'];} else {$add = FALSE;}

include 'base.php';

$conn = new mysqli($serwer, $username, $password, $database);

if ($add) {
    $query = "INSERT INTO customers49536(customers_name, customers_adress)";
    $query .= "VALUES('".$customers_name."','".$customers_adress."')";
    $conn->query($query);
}
include 'customers.php';
?>

