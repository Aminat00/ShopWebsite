<!DOCTYPE html>
<?php include 'includes/head.php' ?>

<html>
<body>
<h1>Welcome to TechStore</h1>
<h3>The shop for techies</h3>
<?php include 'includes/nav.php' ?>


<form action="ViewGoods.php" method="POST">
    <table>
        <tr><td></td><td>Add</td></tr>
        <tr><td>The name of the good</td><td><input type="text" name="goods_name"></td></tr>
        <tr><td>The price of the good</td><td><input type="number" step="0.01" name="goods_price"></td></tr>
        <tr><td></td><td><input type="submit" value="Submit"></td></tr>
    </table>
</form>
</body>
</html>