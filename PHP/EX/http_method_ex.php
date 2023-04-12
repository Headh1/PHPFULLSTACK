
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="GET" action="http_get_ex.php">
        <input type="text" name="id" >
        <input type="password" name="pw">
        <input type="text" name="name">
        <input type="date" name="birth_date" >
        <button type="submit">확인</button>
    </form> -->

    <form method="post" action="http_post_ex.php">
        <input type="text" name="id">
        <input type="password" name="pw">
        <input type="text" name="name">
        <input type="date" name="birth_date">
        <input type="hidden" name="h_page" value="h1">
        <button type="submit">확인</button>
    </form>
</body>
</html>

