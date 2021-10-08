<?php
    if (isset($_GET['error'])) {
        echo "<p>Please fill out the form first!</p>";
    } else if ($_GET['re-enter-password']) {
        echo "<p>Passwords must match!</p>";
    } else if (isset($_POST['logout'])) {
        session_destroy();
    } else if (isset($_SESSION['name'])) {
        header("Location: welcome-view.php");
    }
?>