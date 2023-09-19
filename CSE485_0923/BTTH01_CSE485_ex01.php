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
function tinhMang($arrs) {
    // Tính tổng
    $tong = 0;  // Khởi tạo tổng với giá trị ban đầu là 0
    $dem = count($arrs);  // Lấy số lượng phần tử trong mảng

    for($i = 0; $i < $dem; $i++) {
        $tong += $arrs[$i];  // Cộng giá trị của mỗi phần tử vào tổng
    }

    // Tính hiệu
    $hieu = $arrs[0];
    for($i = 1; $i < $dem; $i++){
        $hieu -= $arrs[$i];
    }

    // Tính tích
    $tich = $arrs[0];
    for($i = 1; $i < $dem; $i++){
        $tich *= $arrs[$i];
    }

    // Tính thương
    $thuong = $arrs[0];
    for($i = 1; $i < $dem; $i++){
        $thuong /= $arrs[$i];
    }

    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";
    echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu . "<br/>";
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br/>";
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br/>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
tinhMang($arrs);
?>

</body>
</html>