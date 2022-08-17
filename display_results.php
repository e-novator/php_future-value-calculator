<?php
/***********************************************************************************
 * Code by: BATHANDWA MAVUSO
 * Email: mavuso.bathandwa365@gmail.com
 * *********************************************************************************/
//get data from the form
$investment = $_POST["investment"];
$interest_rate = $_POST["interest_rate"];
$years = $_POST["years"];

//validate investment entry
if (empty($investment)){
    $error_message = "Investment is a required field.";
}elseif (!is_numeric($investment)) {
    $error_message = "Investmet must be a valid number.";
}elseif ($investment <= 0) {
    $error_message = "Investment must be greater than zero.";
}elseif (empty($interest_rate)) {
    $error_message = "Yearly Interest Rate is a required field.";
}elseif (!is_numeric($interest_rate)) {
    $error_message = "Yearly Interest Rate must be a valid number.";
}elseif ($interest_rate <= 0) {
    $error_message = "Yearly Interest Rate must be greater than Zero.";
}else {
    $error_message = "";
}

//if an error message exits got to the index page
if ($error_message != "") {
    include("index.php");
    exit();
}

//calculate the future value
$future_value = $investment;
for($i = 1; $i <= $years; $i++)
{
    $future_value = ($future_value + ($future_value * $interest_rate * .01));
}

//apply currency and percent formatting
$investment_f = "$".number_format($investment, 2);
$yearly_rate_f = $interest_rate."%";
$future_value_f = "$".number_format($future_value, 2);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>
        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $future_value_f ?></span><br>

        <div id="buttons">
        <label>&nbsp;</label>
          <button type="button"><a href="index.php">Go Back</a></button>
        </div>
    </main>
</body>
<footer class="my_details">
    <p>***********************************************************************************</p>
    <p>Author: Bathandwa Mavuso</p>
    <p>Email: mavuso.bathandwa365@gmail.com</p>
    <p>***********************************************************************************</p>
</footer>
</html>