<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Operation Form</title>
</head>
<body>
    <h1>Math Operation Form</h1>
    <form action="process_math.php" method="POST">
        <label for="input1">Number 1:</label>
        <input type="number" id="input1" name="input1" step="any" required><br><br>
        
        <label for="input2">Number 2:</label>
        <input type="number" id="input2" name="input2" step="any" required><br><br>
        
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select><br><br>
        
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
