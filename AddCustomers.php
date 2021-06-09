<!DOCTYPE html>
<?php include 'includes/head.php' ?>

<html>
<body>
<h1>Welcome to TechStore</h1>
<h3>Add New Customer</h3>
<?php include 'includes/nav.php' ?>


<form action="ViewCustomers.php" method="POST">
    <table>
        <tr><td></td><td>Add</td></tr>
        <tr><td>The name of the customer</td><td><input type="text" name="customers_name"></td></tr>
        <tr><td>The adress of the customer</td><td><input type="text"  name="customers_adress"></td></tr>
        <tr><td></td><td><input type="submit" value="Submit"></td></tr>
    </table>
</form>
</body>
</html>
