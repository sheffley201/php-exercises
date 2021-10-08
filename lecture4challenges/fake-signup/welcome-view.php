<?php
    require 'welcome.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
    </head>
    <body>
        <a href='calculator.php'>Calculator</a>
        <a href='matrix-calc.php'>Matrix Calculator</a>
        <form action="index-view.php" method='post'>
            <input type='submit' name='logout' value='Logout'>
        </form>
    </body>
</html>
