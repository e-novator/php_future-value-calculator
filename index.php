<?php
 //set default value of variables for initial page load
 if (!isset($investment)) { $investment = ''; } 
 if (!isset($interest_rate)) { $interest_rate = ''; } 
 if (!isset($years)) { $years = ''; } 
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
        <?php if (!empty($error_message)) { ?>
           <p class="error"><?php echo $error_message; ?></p> 
       <?php } ?>

       <form action="display_results.php" method="post">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment" value="<?php echo $investment; ?>"><br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate" value="<?php echo $interest_rate; ?>"><br>

            <label>Number of Years:</label>
            <input type="text" name="years" value="<?php echo $years; ?>"><br>
        </div>
        <div class="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>
       </form>
    </main>
</body>
<footer class="my_details">
    <p>***********************************************************************************</p>
    <p>Author: Bathandwa Mavuso</p>
    <p>Email: mavuso.bathandwa365@gmail.com</p>
    <p>***********************************************************************************</p>
</footer>
</html>