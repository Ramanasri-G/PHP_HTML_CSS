<html>
<head>

<title>Registration Success</title>

<style>

body{
    font-family:Arial,sans-serif;
    background:#F7F3E9;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:550px;
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

th{
    width:35%;
    background:#E9E1CD;
    color:#1F3557;
}

th,td{
    padding:10px;
    text-align:left;
}

.success{
    color:#287A3E;
    text-align:center;
    font-weight:bold;
    margin-top:15px;
}

.error{
    color:#A33A3A;
    text-align:center;
    font-weight:bold;
    margin-top:15px;
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

$name=trim($_POST["name"]);
$email=trim($_POST["email"]);
$mobile=trim($_POST["mobile"]);
$address=trim($_POST["address"]);
$city=trim($_POST["city"]);

if(empty($name) || empty($email) || empty($mobile) || empty($address) || empty($city))
{
    echo "<p class='error'>All fields are mandatory.</p>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "<p class='error'>Invalid Email ID.</p>";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "<p class='error'>Invalid Mobile Number.</p>";
}
else
{
    echo "<h2>Customer Registration Successful</h2>";

    echo "<table>";

    echo "<tr><th>Customer Name</th><td>$name</td></tr>";
    echo "<tr><th>Email ID</th><td>$email</td></tr>";
    echo "<tr><th>Mobile Number</th><td>$mobile</td></tr>";
    echo "<tr><th>Address</th><td>$address</td></tr>";
    echo "<tr><th>City</th><td>$city</td></tr>";

    echo "</table>";

    echo "<p class='success'>Customer registered successfully.</p>";
}

?>

<center>

<a href="index.html">Register Another Customer</a>

</center>

</div>

</body>
</html>
