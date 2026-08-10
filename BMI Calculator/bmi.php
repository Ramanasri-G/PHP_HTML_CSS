<html>
<head>

<title>BMI Report</title>

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
    width:500px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#176B5B;
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
    background:#DCEBE6;
    color:#176B5B;
}

th,td{
    padding:10px;
    text-align:center;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#176B5B;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

a:hover{
    background:#0E4B40;
}

</style>

</head>

<body>

<div class="box">

<?php

if($_SERVER["REQUEST_METHOD"] != "POST")
{
    echo "<h2>Invalid Request</h2>";
    echo "<p>Please submit the BMI form first.</p>";
    echo '<center><a href="index.php">Back</a></center>';
    exit;
}

$name = trim($_POST["name"] ?? "");
$height = $_POST["height"] ?? "";
$weight = $_POST["weight"] ?? "";

if(empty($name) || empty($height) || empty($weight))
{
    echo "<h2>BMI Calculation Failed</h2>";
    echo "<p>Please enter all the required details.</p>";
    echo '<center><a href="index.php">Back</a></center>';
    exit;
}

$height = (float)$height;
$weight = (float)$weight;

if($height <= 0 || $weight <= 0)
{
    echo "<h2>BMI Calculation Failed</h2>";
    echo "<p>Please enter valid height and weight.</p>";
    echo '<center><a href="index.php">Back</a></center>';
    exit;
}

$bmi = $weight / ($height * $height);

if($bmi < 18.5)
{
    $status = "Underweight";
    $recommendation = "Eat a balanced and nutritious diet.";
}
elseif($bmi < 25)
{
    $status = "Normal Weight";
    $recommendation = "Maintain a healthy lifestyle.";
}
elseif($bmi < 30)
{
    $status = "Overweight";
    $recommendation = "Focus on balanced nutrition and regular physical activity.";
}
else
{
    $status = "Obese";
    $recommendation = "Consider discussing your health with a healthcare professional.";
}

echo "<h2>BMI Report</h2>";

echo "<table>";

echo "<tr><th>Name</th><td>" . htmlspecialchars($name) . "</td></tr>";

echo "<tr><th>Height</th><td>" . htmlspecialchars($height) . " m</td></tr>";

echo "<tr><th>Weight</th><td>" . htmlspecialchars($weight) . " kg</td></tr>";

echo "<tr><th>BMI</th><td>" . number_format($bmi,2) . "</td></tr>";

echo "<tr><th>Health Status</th><td>" . htmlspecialchars($status) . "</td></tr>";

echo "<tr><th>Recommendation</th><td>" . htmlspecialchars($recommendation) . "</td></tr>";

echo "</table>";

?>

<center>

<a href="index.php">Calculate Again</a>

</center>

</div>

</body>
</html>

