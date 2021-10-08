<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Matrix Calculator</title>
    </head>
    <body>
        <a href="welcome-view.php">Back to home</a>
        <form action="matrix-calc.php" method="post">
            <div class='matrix-one'>
                <input type="number" name='num1'>
                <input type="number" name='num2'>
                <input type="number" name='num3'>
                <input type="number" name='num4'>
                <input type="number" name='num5'>
                <input type="number" name='num6'>
                <input type="number" name='num7'>
                <input type="number" name='num8'>
                <input type="number" name='num9'>
            </div>
            <div class='matrix-two'>
                <input type="number" name='num10'>
                <input type="number" name='num11'>
                <input type="number" name='num12'>
                <input type="number" name='num13'>
                <input type="number" name='num14'>
                <input type="number" name='num15'>
                <input type="number" name='num16'>
                <input type="number" name='num17'>
                <input type="number" name='num18'>
            </div>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Matrix Multiplication</option>
                <option value="scalar">Scalar Multiplication</option>
                <option value="determinate">Determinate</option>
                <option value="inverse">Inverse</option>
            </select><br>
            <input type="submit" value='Calculate'>
        </form>
    </body>
</html>