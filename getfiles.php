<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    if ($_FILES["upload"]["error"] == UPLOAD_ERR_OK) {

        $temp_name = $_FILES["upload"]["tmp_name"];
        $file_name = $_FILES["upload"]["name"];

        $save_name = iconv("utf-8", "cp949", $file_name);
        
        $part = pathinfo($save_name);
        $ext = isset($part["extension"]) ? ".$part[extension]" : "";

        for ($i = 1; file_exists("files/$save_name"); $i++) {
            $save_name = "{$part['filename']} ($i)$ext";
        }
        if (move_uploaded_file($temp_name, "files/$save_name")) {
            echo "업로드 성공<br>";
            echo "업로드한 파일명 : $file_name<br>";
            $save_name_utf8 = iconv("cp949", "utf-8", $save_name);
            echo "저장한 파일명 : $save_name_utf8<br>";
        } else {
            echo "파일 저장 실패";
        }
    } else {
        echo "파일 전송 실패";
    }
    ?>
</body>

</html>

<!-- 
    파일 업로드시 고려해야 하는 것
        -파일 전송 실패 여부 : _$FILeS["태그_이름"]["error"] 값이 UPLOAD_ERR_OK인지 여부 검사
        -파일명 인코딩 변경 : UTF-8 -> CP949(윈도우즈 기준) 바꿔야 한국어 안깨짐
        -파일 이동 성공 여부 : 파일 이동이 성공하면 true, 실패하면 false를 반환
        -동명의 파일 존재 여부
 -->