<?php
    $num1 = $_POST['first-number'];
    $num2 = $_POST['second-number'];
    $result;
    if ($_POST['operation'] == 'add') {
        $result = $num1 + $num2;
    } else if ($_POST['operation'] == 'subtract') {
        $result = $num1 - $num2;
    } else if ($_POST['operation'] == 'multiply') {
        $result = $num1 * $num2;
    } else if ($_POST['operation'] == 'divide') {
        $result = $num1 / $num2;
    }
    require 'index.view.php';
    echo "The answer is: $result";
?>