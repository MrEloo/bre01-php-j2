<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<?php require('operation.php'); ?>

<body>




    <?php
    $formData = array();

    foreach ($_POST as $key => $value) {
        if (!empty($value) && isset($value)) {
            $formData[$key] = $value;
        }
    }

    $number1 = $formData["number1"] ?? null;
    $number2 = $formData["number2"] ?? null;
    $choix = $formData["choix"] ?? null;

    ?>

    <?php require('form.phtml'); ?>

</body>

</html>