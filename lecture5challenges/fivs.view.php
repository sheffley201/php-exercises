<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--jQuery CDN-->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

    <!--Bootstrap CDNs-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>FIVS</title>
</head>
<body>
    <div class="container-fluid bg-primary p-5">
        <h1 class='display-1 text-white text-center'>Please Log In</h1>
    </div>

    <div class="container p-5 my-5" style='max-width: 600px'>
        <form action='validate.php' method='post' novalidate>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name='username' class="form-control" id="username" placeholder="Enter username" aria-describedby="usernameHelp">
                <small id='usernameHelp' class='form-text text-muted'>Username must be at least 6 characters</small>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name='password' class="form-control" id="password" placeholder="Enter Password" aria-describedby="passwordHelp">
                <small id="passwordHelp" class="form-text text-muted">
                    Your password must be at least 6 characters long, and contain at least one uppercase, one lowercase, and one number.
                </small>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" name='confirm-password' class="form-control" id="confirm-password" placeholder="Confirm Password">
            </div>
            <button type="submit" name='submit' class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>