<html>
<head>

<title>Attendance Report</title>

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
    width:520px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#155E63;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #C8C2B8;
}

th{
    background:#DCEBE8;
    color:#155E63;
}

th,td{
    padding:10px;
    text-align:left;
}

.success{
    color:#287A3E;
    text-align:center;
    font-weight:bold;
}

.error{
    color:#B33A3A;
    text-align:center;
    font-weight:bold;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#155E63;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

a:hover{
    background:#0E4549;
}

</style>

</head>

<body>

<div class="box">

<?php

function attendancePercentage($present,$working)
{
    return ($present/$working)*100;
}

function eligibility($percentage)
{
    if($percentage>=75)
    {
        return "Eligible for Examination";
    }
    else
    {
        return "Not Eligible for Examination";
    }
}

$name=$_POST["name"];
$working=$_POST["working"];
$present=$_POST["present"];

$percentage=attendancePercentage($present,$working);
$status=eligibility($percentage);

echo "<h2>Attendance Report</h2>";

echo "<table>";

echo "<tr><th>Student Name</th><td>$name</td></tr>";
echo "<tr><th>Total Working Days</th><td>$working</td></tr>";
echo "<tr><th>Days Present</th><td>$present</td></tr>";
echo "<tr><th>Attendance Percentage</th><td>".number_format($percentage,2)."%</td></tr>";
echo "<tr><th>Examination Eligibility</th><td>$status</td></tr>";

echo "</table>";

if($percentage>=75)
{
    echo "<p class='success'>Congratulations! You are eligible for the examination.</p>";
}
else
{
    echo "<p class='error'>Your attendance is below 75%. You are not eligible for the examination.</p>";
}

?>

<center>

<a href="index.html">Check Another Student</a>

</center>

</div>

</body>
</html>

