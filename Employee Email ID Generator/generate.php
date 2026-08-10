<html>
<head>

<title>Employee Email ID</title>

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
    width:450px;
    background:white;
    padding:25px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

h2{
    color:#1F3557;
}

p{
    margin:12px 0;
    font-size:18px;
}

a{
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

$name = trim($_POST["name"]);
$domain = trim($_POST["domain"]);

$emailName = strtolower(str_replace(" ",".",$name));

$email = $emailName."@".$domain;

echo "<h2>Employee Email Generated</h2>";

echo "<p><b>Employee Name :</b> $name</p>";

echo "<p><b>Email ID :</b> $email</p>";

?>

<br><br>

<a href="index.html">Generate Another</a>

</div>

</body>
</html>
