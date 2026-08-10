<html>
<head>

<title>Mobile Bill Summary</title>

<style>

body{
    font-family:Arial;
    background:#EEF4F8;
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
    box-shadow:0 5px 15px rgba(15,35,55,0.18);
}

h2{
    text-align:center;
    color:#123B5D;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #B8CBD8;
}

th{
    background:#DCEBF2;
    color:#123B5D;
}

th,td{
    padding:10px;
    text-align:left;
}

td{
    color:#34566F;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#123B5D;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

a:hover{
    background:#1597B8;
}

</style>

</head>

<body>

<div class="box">

<?php

function calculateBill($plan,$minutes)
{
    if($plan=="Basic")
    {
        return 199 + ($minutes * 0.50);
    }
    elseif($plan=="Standard")
    {
        return 399 + ($minutes * 0.40);
    }
    else
    {
        return 599 + ($minutes * 0.30);
    }
}

$name=$_POST["name"];
$mobile=$_POST["mobile"];
$plan=$_POST["plan"];
$minutes=$_POST["minutes"];

$total=calculateBill($plan,$minutes);

echo "<h2>Mobile Bill Summary</h2>";

echo "<table>";

echo "<tr><th>Customer Name</th><td>$name</td></tr>";
echo "<tr><th>Mobile Number</th><td>$mobile</td></tr>";
echo "<tr><th>Tariff Plan</th><td>$plan</td></tr>";
echo "<tr><th>Call Minutes Used</th><td>$minutes</td></tr>";
echo "<tr><th>Total Bill</th><td><b>₹".number_format($total,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Generate Another Bill</a>

</center>

</div>

</body>
</html>