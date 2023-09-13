<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, inital-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="title">
            All in One Calculator
        </h1>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Input 1st Number" required><br>
            <input type="number" name="num2" placeholder="Input 2nd Number"><br>
            <select name="operation">
                <option selected>Select</option>
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select>
            <br>
            <button type="submit">
                Calculate
            </button>
        </form>
        <div class="result">
            <?php
            include "server.php";
            ?>
        </div>
    </div>
</body>

</html>