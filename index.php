<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "echo 사용 예제<br>"; #앞\n뒤 해도 줄바꿈 안됨

    echo "시작     끝<br>"; #HTML 규약(연속된 공백은 하나의 공백으로 출력), 공백을 여러개 출력하고 싶다면 "&nbsp" 사용

    echo "계산 결과 출력 : "; 
    echo 3 + 7;
    echo "<br>";

    echo "한 줄의 echo로 여러 값 출력 : ", 3 + 7, "<br>"; #쉼표(,)를 적고 그 뒤에 입력하면 순서대로 출력
    echo "특수한 글자 출력 : \" \$<br>"; #따옴표(")나 달러기호($)를 출력할때는 백 슬래시(\)를 먼저 써야함
    ECHO "대문자 ECHO도 똑같이 사용 가능 <br>";#PHP는 모든 예약어에 대해 대소문자를 구분하지 않음.
    ?>
</body>

</html>

<!-- 
    단축 태그 "<?="출력할_값"?>"
    이때 <+?+= 이 세글자는 공백 없이 붙여 써야 함
    echo 단축 태그 (echo shortcut)라고 부름
 -->