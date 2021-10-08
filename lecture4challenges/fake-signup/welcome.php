<?php
    session_start();
    if (isset($_POST['sub']) && $_POST['name'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['confirm-password'] != "") {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        require "banner.php";
        echo "<p>Thank you for signing up!</p>";
        if ($_POST['password'] !== $_POST['confirm-password']) {
            header("Location: index-view.php?re-enter-password=1");
        }
    } else if (isset($_SESSION['name'])) {
        require "banner.php";
    } else {
        header("Location: index-view.php?error=1");
    }
?>