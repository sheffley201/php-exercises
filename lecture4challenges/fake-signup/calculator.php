<?php
    session_start();
    if (!isset($_SESSION['name'])) {
        header("Location: index-view.php?error=1");
    }
    require "banner.php";
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
    require 'calculator.view.php';
    echo "The answer is: $result";
?>