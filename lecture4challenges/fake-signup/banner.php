<?php
    session_start();
    echo "<h1>Home Page</h1>";
    echo "<h2>Welcome, {$_SESSION['name']}!</h2>";
    echo "<p>Your E-mail address is {$_SESSION['email']}</p>";
?>