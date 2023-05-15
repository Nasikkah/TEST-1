<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function A000124($n) {
  return pow($n, 2) + pow(-1, $n);
}

$input = 5; // input dapat diubah sesuai keinginan
$output = A000124($input);

echo "Input: " . $input . "\n";
echo "Output: " . $output . "\n";
?>
</body>
</html>