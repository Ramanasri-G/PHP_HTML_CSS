<html>
<head>
<title>Customer Invoice</title>

<style>

body{
    font-family:Arial;
    background:#EEF3F8;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.invoice{
    width:500px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#1E3A5F;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table,th,td{
    border:1px solid #B8C7D9;
}

th{
    background:#DCE6F1;
    color:#1E3A5F;
}

th,td{
    padding:10px;
    text-align:center;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#1E3A5F;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

a:hover{
    background:#142A44;
}

</style>
</head>

<body>

<div class="invoice">

<?php

$customer=$_POST["customer"];
$product=$_POST["product"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];

$subtotal=$quantity*$price;

$discount=$subtotal*0.10;

$amountAfterDiscount=$subtotal-$discount;

$tax=$amountAfterDiscount*0.05;

$total=$amountAfterDiscount+$tax;

echo "<h2>Customer Invoice</h2>";

echo "<p><b>Customer:</b> $customer</p>";

echo "<table>";

echo "<tr>
<th>Product</th>
<th>Qty</th>
<th>Price</th>
<th>Subtotal</th>
</tr>";

echo "<tr>
<td>$product</td>
<td>$quantity</td>
<td>₹$price</td>
<td>₹$subtotal</td>
</tr>";

echo "<tr>
<td colspan='3'><b>Discount (10%)</b></td>
<td>₹$discount</td>
</tr>";

echo "<tr>
<td colspan='3'><b>Tax (5%)</b></td>
<td>₹$tax</td>
</tr>";

echo "<tr>
<td colspan='3'><b>Grand Total</b></td>
<td><b>₹$total</b></td>
</tr>";

echo "</table>";

?>

<br>

<a href="index.html">New Bill</a>

</div>

</body>
</html>