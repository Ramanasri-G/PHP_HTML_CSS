<html>
<head>

<title>Sales Report</title>

<style>

body{
    font-family:Arial;
    background:#EAF0F6;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:500px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
}

h2{
    text-align:center;
    color:#17365D;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #B8C4CE;
}

th{
    background:#DCE6F1;
    color:#17365D;
}

th,td{
    padding:10px;
    text-align:center;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#17365D;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

a:hover{
    background:#0F2742;
}

</style>

</head>

<body>

<div class="box">

<?php

function calculateSales($quantity,$price)
{
    return $quantity * $price;
}

$product=$_POST["product"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];

$total=calculateSales($quantity,$price);

echo "<h2>Sales Report</h2>";

echo "<table>";

echo "<tr><th>Product Name</th><td>$product</td></tr>";
echo "<tr><th>Quantity</th><td>$quantity</td></tr>";
echo "<tr><th>Price per Unit</th><td>₹".number_format($price,2)."</td></tr>";
echo "<tr><th>Total Sales Value</th><td><b>₹".number_format($total,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Calculate Again</a>

</center>

</div>

</body>
</html>