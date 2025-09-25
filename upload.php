<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getfiles.php" method="post" enctype="multipart/form-data">
        업로드할 파일을 선택하세요.<br>
        <input type="file" name="upload"><br><br>
        <input type="submit" value="업로드">
    </form>
</body>
</html>

<!-- 
    파일을 업로드 할 때에는
    -전송 방식이 POST여야 함. GET 방식을 사용하면 파일이 전송되지 않음
    -enctype 속성은 폼에 입력된 내용을 전송할 때 사용할 인코딩 방법을 지정하는 것
 -->

<!-- 
    업로드된 파일 처리하기ㅣ
        -html 양식을 통해 전송된 파일은 임시 폴더에 임시 파일명으로 저장됨
        -이 파일을 우리가 원하는 폴더에 원하는 이름으로 이동시켜야 함
 -->

<!-- 
    파일에 관련된 정보

    |  배열                              |  담긴 정보
    $_FILES["태그_이름"]["tmp_name"]        임시 파일명
    $_FILES["태그_이름"]["name"]            원래 파일명
    $_FILES["태그_이름"]["size"]            파일 크기
    $_FILES["태그_이름"]["type"]            파일의 타입
    $_FILES["태그_이름"]["error"]           업로드 오류코드

 -->