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
        <title>Set Calculator</title>
    </head>
    <body>
        <div class="container-fluid bg-primary p-3">
            <h1 class='display-1 text-center text-white'>Set Calculator</h1>
        </div>

        <div class="container my-5" style='max-width: 600px'>
            <form action='set.php' method='post'>
                <div class="row">
                    <div class="col">
                        <label for="set-one">Set one</label>
                        <select id="set-one" name='set-one' class="form-select">
                            <option selected>Choose...</option>
                            <option value='set-1'>Set 1</option>
                            <option value='set-2'>Set 2</option>
                            <option value='set-3'>Set 3</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="set-two">Set two</label>
                        <select id="set-two" name='set-two' class="form-select">
                            <option selected>Choose...</option>
                            <option value='set-1'>Set 1</option>
                            <option value='set-2'>Set 2</option>
                            <option value='set-3'>Set 3</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="operation">Operation</label>
                        <select id="operation" name='operation' class="form-select">
                            <option selected>Choose...</option>
                            <option value='print'>Print set - set one only</option>
                            <option value='exists'>Exists(n) - set one only</option>
                            <option value='add'>Add number(n) - set one only</option>
                            <option value='remove'>Remove number(n) - set one only</option>
                            <option value='union'>Union - both sets</option>
                            <option value='intersection'>Intersection - both sets</option>
                            <option value='difference'>Difference - both sets</option>
                        </select>
                    </div>
                </div>
                <div class='row'>
                    <div class='col'>
                        <label for="number">Number</label>
                        <input type="number" class='form-control' name="number" id="number" aria-describedby="numberHelp">
                        <small id='numberHelp' class='form-text text-muted'>For: Add, Remove, and Exists</small>
                    </div>
                    <div class='col d-flex justify-content-end align-items-center'>
                        <input type="submit" value="Do operation" class='btn btn-primary' style='height: 40px'>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>