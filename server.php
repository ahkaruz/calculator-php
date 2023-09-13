<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $num1 = $_POST["num1"];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    if ($operation == 'add') {
        $result = $num1 + $num2;
        echo "Result: $result";
    } else if ($operation == 'sub') {
        $result = $num1 - $num2;
        echo "Result: $result";
    } else if ($operation == 'mul') {
        $result = $num1 * $num2;
        echo "Result: $result";
    } else if ($operation == 'div') {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Result: $result";
        } else
            echo "Cannot divide by zero!";
    }
}
