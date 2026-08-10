<html>
<head>

<title>Customer Dashboard</title>

<style>

body{
    font-family:Arial;
    background:#F3F6FA;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:500px;
    background:white;
    padding:25px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 6px 18px rgba(20,40,70,0.18);
}

h2{
    color:#17365D;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #C5CFDA;
}

th{
    background:#E8EDF3;
    color:#17365D;
}

th,td{
    padding:10px;
    text-align:left;
}

td{
    color:#34495E;
}

.success{
    color:#287A4D;
    font-weight:bold;
}

.error{
    color:#B23A48;
    font-weight:bold;
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
    background:#B38B2E;
}

</style>

</head>

<body>

<div class="box">

<?php

$validCustomer="customer123";
$validPassword="bank@123";

$customer=$_POST["customerid"];
$password=$_POST["password"];

if($customer==$validCustomer && $password==$validPassword)
{

echo "<h2>Welcome to Online Banking</h2>";

echo "<p class='success'>Login Successful</p>";

echo "<table>";

echo "<tr><th>Customer Name</th><td>Rahul Sharma</td></tr>";
echo "<tr><th>Customer ID</th><td>$customer</td></tr>";
echo "<tr><th>Account Number</th><td>123456789012</td></tr>";
echo "<tr><th>Account Type</th><td>Savings</td></tr>";
echo "<tr><th>Available Balance</th><td>₹75,500.00</td></tr>";

echo "</table>";

}
else
{

echo "<h2>Login Failed</h2>";

echo "<p class='error'>Invalid Customer ID or Password.</p>";

}

?>

<br>

<a href="index.html">Back to Login</a>

</div>

</body>
</html>