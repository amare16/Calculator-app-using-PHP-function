<!DOCTYPE html>
<html>
    <head>
        <title>Calculator app using PHP function</title>
    </head>
    <body>
        <form action="calculator_process.php" method="post">
            <label>Select an operation: </label>
            <select name="dropdown">
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select><br><br>
            Enter the first number: <input type="text" name="firstNum"><br>
            Enter the second number: <input type="text" name="secondNum"><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>