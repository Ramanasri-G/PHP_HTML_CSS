<html>
<head>

<title>Electricity Bill</title>

<style>

body{
    font-family:Arial;
    background:#F7F3E9;
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
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#1F3557;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #D6C9A8;
}

th,td{
    padding:10px;
    text-align:center;
}

th{
    background:#E9E1CD;
    color:#1F3557;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#1F3557;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

a:hover{
    background:#14243D;
}

</style>

</head>

<body>

<div class="box">

<?php

$name=$_POST["name"];
$units=$_POST["units"];

if($units<=100)
{
    $rate=1.50;
}
elseif($units<=200)
{
    $rate=2.50;
}
elseif($units<=300)
{
    $rate=4.00;
}
else
{
    $rate=6.00;
}

$total=$units*$rate;

echo "<h2>Electricity Bill</h2>";

echo "<table>";

echo "<tr><th>Consumer Name</th><td>$name</td></tr>";
echo "<tr><th>Units Consumed</th><td>$units</td></tr>";
echo "<tr><th>Rate per Unit</th><td>₹".$rate."</td></tr>";
echo "<tr><th>Total Bill Amount</th><td><b>₹".number_format($total,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Calculate Another Bill</a>

</center>

</div>

</body>
</html>
