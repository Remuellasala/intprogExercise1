<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>lab4</title>
</head>
<body>
<?php

header("Content-Type: application/json");

$input = file_get_contents("php://input");

$data = json_decode($input, true);

$name = $data["name"];

$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];

echo json_encode($response);

?>

</body>
</html>
