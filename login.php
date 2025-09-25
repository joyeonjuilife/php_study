<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    아이디 : <?= $_REQUEST["id"] ?><br>
    비밀번호 : <?= $_REQUEST["pw"] ?><br>
</body>
</html>

<!-- 
    POST 방식의 값 전달
    값들이 utl에 나타나지 않음
    ->노출되면 곤란한 정보나 많은 양의 데이터를 전달할 때 사용
 -->


 <!-- 
    $_REQUEST["입력_태그의_name_속성"]
    전달 방식의 차이는 있으나 같은 방법으로 값을 받을 수 있음
  -->


<!-- 다양한 입력 형태(HTML기초)
    <input>
        -텍스트,비번,라디오버튼,체크박스,전송버튼,초기화버튼,파일업로드
    <select>
        -드롭다운 리스트, 일반 리스트
    <textarea>
        -여러 줄의 텍스트
-->


<!-- 
    PHP 제어문 대체 구문
    보통은 중괄호({})를 쓰지만
    ({)여는 중괄호는 콜론(:), 닫는 중괄호(})는 end~  로 바꿈
-->


<!-- 
    다른언어 함수와 PHP 함수의 차이점
    java,c는 위에 정의하거나 헤더파일에 선언해야하는 반면, php는 함수 선언을 코드 어디에 두둔지 사용가능
 -->


 <!-- 
    PHP의 배열
    php 배열은 숫자 인덱스와 문자열키를 동신에 사용 가능

    연관배열(Associative Array)
    숫자 인덱스 대신 문자열 key를 사용하는 배열로,
    python의 dictionary, javascript의 object, java의 map과 비슷한 자료구조
  -->
