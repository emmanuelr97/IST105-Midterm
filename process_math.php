<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input1 = isset($_POST['input1']) ? $_POST['input1'] : '';
    $input2 = isset($_POST['input2']) ? $_POST['input2'] : '';
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

    if ($input1 === '' || $input2 === '' || $operation === '') {
        echo "Invalid input. Please go back and try again.";
        exit;
    }

    $escapedInput1 = escapeshellarg($input1);
    $escapedInput2 = escapeshellarg($input2);
    $escapedOperation = escapeshellarg($operation);

    $command = "python3 math_operations.py $escapedInput1 $escapedInput2 $escapedOperation";
    
    $output = shell_exec($command);
    
    echo $output;
} else {
    echo "Invalid request method.";
}
?>
