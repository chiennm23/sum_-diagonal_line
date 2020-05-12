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
<form method="post">
    <input type="text" name="len" placeholder="do dai cua mang">
    <button type="submit">Submit</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arr_len = $_POST['len'];
    $sum_diagonal = 0;
    echo "Mang ban dau: " . "<br>";
    for ($i = 0; $i < $arr_len; $i++) {
        for ($j = 0; $j < $arr_len; $j++) {
            $arr[$i][$j] = rand(0, 50);
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    for ($i = 0; $i < $arr_len; $i++) {
        for ($j = 0; $j < $arr_len; $j++) {
            if ($i == $j){
                $sum_diagonal += $arr[$i][$j];
            }
        }
    }
    echo "<br>" . "Tong duong cheo la: ". $sum_diagonal;
}
?>
</body>
</html>