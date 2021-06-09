<?php
$conn= @new mysqli($serwer,$username,$password,$database);
$query="SELECT * FROM goods49536";
$rs=$conn->query($query);
$conn->close();
$num= $rs->num_rows;
?>