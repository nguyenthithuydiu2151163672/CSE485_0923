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
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$finalString = '';

// Duyệt qua mảng và xây dựng chuỗi
for ($i = 0; $i < count($arrs); $i++) {
    $finalString .= "Màu {$arrs[$i]} là màu yêu thích của {$names[$i]}";

    // Xử lý phần cuối
    if ($i === count($arrs) - 2) {
        $finalString .= ", còn màu yêu thích của tôi là ";
    } elseif ($i === count($arrs) - 1) {
        $finalString .= ".";
    } else {
        $finalString .= ", ";
    }
}

echo $finalString;
?>
</body>
</html>
