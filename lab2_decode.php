<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$json = '{"name":"Junjun Maru","age":28,"email":"Junjun@gmail.com"}';

$object = json_decode($json);
$array = json_decode($json, true);

echo "Object: " . $object->name . "<br>";
echo "Array: " . $array["email"] . "<br>";

?>
</body>
</html>