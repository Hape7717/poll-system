<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="poll.css">
</head>
<body>
    <h2>แบบสอบถาม(Poll)</h2>
    <form action="check_poll.php" method="post">
        <table border=1>
            <tr>
                <td colspan="5">ประเมินความพึงพอใจในครูผู้สอน</td>
            </tr>
            <tr>
                <td  width="500px">คำถาม</td>
                <td>ดีมาก</td>
                <td>ดี</td>
                <td>พอใช้</td>
                <td>น้อย</td>
            </tr>
            <tr>
                <td>ครูสวยไหม</td>
                <td><input type="radio" name="tb1" value="4"></td>
                <td><input type="radio" name="tb1" value="3"></td>
                <td><input type="radio" name="tb1" value="2"></td>
                <td><input type="radio" name="tb1" value="1"></td>
            </tr>
            <tr>
                <td>ครูดื้อไหม</td>
                <td><input type="radio" name="tb2" value="4"></td>
                <td><input type="radio" name="tb2" value="3"></td>
                <td><input type="radio" name="tb2" value="2"></td>
                <td><input type="radio" name="tb2" value="1"></td>
            </tr>
        </table>
        <button type="submit">ส่งแบบสอบถาม</button>
    </form>
</body>
</html>