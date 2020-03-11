<?php
    require('./includes/calc.class.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCalculator</title>
</head>
<body>

    <?php $calc = new Calc(12, 6);
        echo $calc->Add();
        echo "<br />";
        echo $calc->Multiply();
        echo "<br />";
        echo $calc->Subtract();
        echo "<br />";
        echo $calc->Divide();
    ?>
    
</body>
</html>