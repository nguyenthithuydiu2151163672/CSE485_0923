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
echo "Màu <span style='color:red'>". $arrs[0] ."</span> là màu yêu thích của Anh, <span style='color:green'>". $arrs[3] ."</span> là màu yêu thích của Sơn, <span style='color:orange'>". $arrs[2] ."</span> là màu yêu
thích của Thắng, còn màu yêu thích của tôi là màu <span style='color:green'>". $arrs[3] ."</span>";
?>
</body>
</html>