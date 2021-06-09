<?php
$conn= @new mysqli($serwer,$username,$password,$database);
$query="SELECT * FROM customers49536";
$rs=$conn->query($query);
$conn->close();
$num= $rs->num_rows;
?>
