<?php
    session_start();
    require 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
    </head>
    <body>
        <h1>Hello, please sign in</h1>

        <form action='welcome-view.php' method='post'>
            <p>Name: <input type='text' name='name' value='<?php echo $_SESSION['name'] ?>'></p>
            <p>E-mail: <input type='email' name='email' value='<?php echo $_SESSION['email'] ?>'></p>
            <p>Password: <input type='password' name='password'></p>
            <p>Confirm Password: <input type='password' name='confirm-password'></p>
            <input type='submit' name='sub'>
        </form>
    </body>
</html>