<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "관심언어 : ";
    foreach ( $_REQUEST["lang"] as $value)
        echo "$value";
    echo "<br>";

    echo "취미 : ";
    foreach ( $_REQUEST["hobby"] as $value)
        echo "$value";
    echo "<br>";
    ?>
</body>
</html>

<!-- 
    php는 기본적으로 $_REQUEST["name"]에 마지막 값만 저장함
    따라서, 배열(name[]) 형식을 따르지 않을 경우 같은 name이 여러 번 전송되어
    마지막 값만 저장되므로 다중 선택을 처리하기 곤란함
 -->