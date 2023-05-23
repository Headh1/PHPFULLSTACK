<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>tests.index</h1>
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index')}}">index 누르세요</a>
    <br>
    <a href="{{route('tasks.show',['task'=> 13])}}">show 누르세요</a>
    <br>
    <form action="{{route('tasks.update',['task'=>1])}}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
        <button type="submit"> update 누르세요</button>
    </form>

    <a href="{{route('tasks.edit',['task'=> 999])}}">edit 누르세요</a>

    <form action="{{route('tasks.edit',['task'=>999])}}" method="GET">
        @csrf
        <button type="submit">edit 누르세요</button>
    </form>
    <hr>
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf
        <input type="text" name="id">
        <input type="text" name="pw">
        <button type="submit">store 누르세요</button>
    </form>
</body>
</html>