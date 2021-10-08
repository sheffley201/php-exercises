<?php
    $username = '';
    $email = '';
    $password = '';
    $confirmPassword = '';

    if (isset($_GET['error'])) {
        echo "Please fill out all fields!";
    } else if (isset($_GET['user-error'])) {
        $username = $_GET['user-error'];
        echo "Username must be at least 6 characters.";
    } else if (isset($_GET['email-error'])) {
        $email = $_GET['email-error'];
        echo "Please enter a valid email address.";
    } else if (isset($_GET['password-error'])) {
        $password = $_GET['password-error'];
        echo "Your password must be at least 6 characters long, and contain at least one uppercase, one lowercase, and one number.";
    } else if (isset($_GET['password-match-error'])) {
        $password = $_GET['password-match-error'];
        $confirmPassword = $_GET['other-password'];
        echo "Passwords do not match.";
    };

    require 'fivs.view.php';

?>