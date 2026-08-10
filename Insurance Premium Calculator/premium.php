<html>
<head>

<title>Policy Summary</title>

<style>

body{
    font-family:Arial;
    background:#F4F1EA;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:550px;
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(20,35,55,0.15);
}

h2{
    text-align:center;
    color:#17324D;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #D6D0C4;
}

th{
    background:#E8DFCB;
    color:#17324D;
}

th,td{
    padding:10px;
    text-align:left;
}

td{
    color:#34495E;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#17324D;
    color:white;
    padding:10px 20px;
    border-radius:6px;
}

a:hover{
    background:#C49A3A;
}

</style>

</head>

<body>

<div class="box">

<?php

$name=$_POST["name"];
$age=$_POST["age"];
$term=$_POST["term"];
$coverage=$_POST["coverage"];

if($age<=30)
{
    $rate=2;
}
elseif($age<=50)
{
    $rate=3;
}
else
{
    $rate=4;
}

$premium=($coverage*$rate)/100;

echo "<h2>Insurance Policy Summary</h2>";

echo "<table>";

echo "<tr><th>Policy Holder</th><td>$name</td></tr>";
echo "<tr><th>Age</th><td>$age Years</td></tr>";
echo "<tr><th>Policy Term</th><td>$term Years</td></tr>";
echo "<tr><th>Coverage Amount</th><td>₹".number_format($coverage,2)."</td></tr>";
echo "<tr><th>Premium Rate</th><td>$rate%</td></tr>";
echo "<tr><th>Premium Amount</th><td><b>₹".number_format($premium,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Calculate Again</a>

</center>

</div>

</body>
</html>