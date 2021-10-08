<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="first-number">
            <input type="text" name='second-number'>
            <select name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select><br>
            <input type="submit" value="Calculate">
        </form>
    </body>
</html>