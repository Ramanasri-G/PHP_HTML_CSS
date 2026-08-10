<html>
<head>

<title>Registration Details</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#F7F4ED;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:500px;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#1F3557;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table,th,td{
    border:1px solid #D6C9A8;
}

th{
    background:#E9E1CD;
    padding:12px;
    text-align:left;
    color:#1F3557;
}

td{
    padding:12px;
}

.success{
    color:#287A3E;
    font-weight:bold;
    text-align:center;
    margin-top:20px;
}

.error{
    color:#A33A3A;
    font-weight:bold;
    text-align:center;
    margin-top:20px;
}

.btn{
    display:block;
    width:220px;
    margin:25px auto 0;
    text-align:center;
    text-decoration:none;
    background:#1F3557;
    color:white;
    padding:12px;
    border-radius:5px;
}

.btn:hover{
    background:#14243D;
}

</style>

</head>

<body>

<div class="box">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $mobile = trim($_POST["mobile"] ?? "");
    $course = $_POST["course"] ?? "";
    $mode = $_POST["mode"] ?? "";

    if(empty($name) || empty($email) || empty($mobile) || empty($course) || empty($mode))
    {
        echo "<p class='error'>Please fill all the required fields.</p>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<p class='error'>Invalid Email Address.</p>";
    }
    else
    {
        echo "<h2>Course Registration Details</h2>";

        echo "<table>";
        echo "<tr><th>Student Name</th><td>$name</td></tr>";
        echo "<tr><th>Email Address</th><td>$email</td></tr>";
        echo "<tr><th>Mobile Number</th><td>$mobile</td></tr>";
        echo "<tr><th>Selected Course</th><td>$course</td></tr>";
        echo "<tr><th>Training Mode</th><td>$mode</td></tr>";
        echo "</table>";

        echo "<p class='success'>Registration Completed Successfully!</p>";
    }
}
else
{
    echo "<p class='error'>Please submit the registration form first.</p>";
}

?>

<a href="index.html" class="btn">Register Another Student</a>

</div>

</body>
</html>
