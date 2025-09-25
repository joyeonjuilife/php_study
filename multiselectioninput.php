<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        <table>
            <tr>
                <td>관심언어</td>
                <td>
                    <input type="checkbox" name="lang[]" value="PHP">PHP
                    <input type="checkbox" name="lang[]" value="JSP">JSP
                    <input type="checkbox" name="lang[]" value="ASP">ASP
                </td>
            </tr>

            <tr>
                <td>취미</td>
                <td>
                    <select name="hobby[]" size="4" multiple>
                        <option value="영화">영화</option>
                        <option value="운동">운동</option>
                        <option value="독서">독서</option>
                        <option value="기타">기타</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="sumbit" value="전송">
    </form>
</body>
</html>


<!-- 
    checkbox나 다중선택을 허용하는 select 박스는 입력 값이 배열로 전달되므로 
    name에 반드시 []를 붙임.
 -->