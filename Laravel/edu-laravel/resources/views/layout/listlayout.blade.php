<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="laravel/edu-laravel/resources/css/common.css">
    <title>Document</title>
</head>
<body>
    @include('layout.inc.header')

    <form >
    @csrf
    <input type="text" placeholder="id">
    <br>
    <input type="password" placeholder="pw">
    <br>
    <button>눌러</button>
    </form>
    @include('layout.inc.footer')
</body>
</html>