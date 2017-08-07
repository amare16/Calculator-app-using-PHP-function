# Calculator-app-using-PHP-function

  `It is a simple calculator application by using php function.
  
  
<!DOCTYPE html>
<html>
    <head>
        <title>Calculator app using PHP function</title>
    </head>
    <body>
        <form action="calculator_process.php" method="POST">
            <label>Select an operation: </label>
            <select name="dropdown">
                <option value="Addition">Addition</option>
                <option value="Subtraction">Subtraction</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Division">Division</option>
            </select><br><br>
            Enter the first number: <input type="text" name="firstNum" required><br>
            Enter the second number: <input type="text" name="secondNum" required><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
