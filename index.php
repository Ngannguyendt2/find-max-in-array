<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array = [
    [1, 3, 6, 2],
    [34, 23, 65, 33],
    [3, 34, 22, 766, 4]
];
function findMax($arr)
{
    $max = $arr[0][0];
    $indexRow = null;
    $indexCol = null;
    foreach ($arr as $key => $item) {
        foreach ($item as $name => $value) {
            if ($value > $max) {
                $max = $value;
                $indexRow = $key;
                $indexCol = $name;
            }
        }
    }
    echo "Vi tri hang thu " . $indexRow . "<br>";
    echo "Vi tri cot thu " . $indexCol . "<br>";
    return $max;
}

echo "Max la " . findMax($array);
?>
</body>
</html>
