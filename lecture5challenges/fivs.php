<?php
    require 'fivs.view.php';

    if (isset($_GET['error'])) {
        echo "Please fill out all fields!";
    } else if (isset($_GET['user-error'])) {
        echo "Username must be at least 6 characters.";
    } else if (isset($_GET['email-error'])) {
        echo "Please enter a valid email address.";
    } else if (isset($_GET['password-error'])) {
        echo "Your password must be at least 6 characters long, and contain at least one uppercase, one lowercase, and one number.";
    } else if (isset($_GET['password-match-error'])) {
        echo "Passwords do not match.";
    };
?>