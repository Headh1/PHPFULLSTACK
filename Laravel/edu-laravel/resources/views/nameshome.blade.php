<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/names">names</a>
    <br>
    <a href="{{url('/names');}}">names</a>
    <br>
    <a href="{{route('names.index');}}">names</a>
</body>
</html>