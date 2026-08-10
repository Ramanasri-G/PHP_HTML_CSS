<html>
<head>

<title>Validation Result</title>

<style>

body{
    font-family:Arial;
    background:#F5F1E8;
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
    text-align:center;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    color:#1F3A5F;
}

.success{
    color:#2E7D32;
    font-weight:bold;
}

.error{
    color:#B71C1C;
    font-weight:bold;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#1F3A5F;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

a:hover{
    background:#162B46;
}

</style>

</head>

<body>

<div class="box">

<?php

$email = trim($_POST["email"]);
$password = $_POST["password"];
$mobile = trim($_POST["mobile"]);

$status = true;

echo "<h2>Validation Report</h2>";

if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "<p class='success'>✓ Valid Email ID</p>";
}
else
{
    echo "<p class='error'>✗ Invalid Email ID</p>";
    $status=false;
}

if(strlen($password)>=8)
{
    echo "<p class='success'>✓ Valid Password</p>";
}
else
{
    echo "<p class='error'>✗ Password must contain at least 8 characters</p>";
    $status=false;
}

if(preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "<p class='success'>✓ Valid Mobile Number</p>";
}
else
{
    echo "<p class='error'>✗ Invalid Mobile Number</p>";
    $status=false;
}

echo "<br>";

if($status)
{
    echo "<h3 class='success'>All Details are Valid.</h3>";
}
else
{
    echo "<h3 class='error'>Validation Failed.</h3>";
}

?>

<br>

<a href="index.html">Try Again</a>

</div>

</body>
</html>

