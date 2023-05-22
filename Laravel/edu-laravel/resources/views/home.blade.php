<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home!</h1>
    <br>
    <br>

    <form action="/method" method="post">
        @csrf
        <button type="submit">post</button>
    </form>

    <form action="/method" method="post">
        @csrf
        @method('PUT')
        <button type="submit">put</button>
    </form>

    <form action="/method" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</body>
</html>