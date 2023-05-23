<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title','부모타이틀')</title>
</head>
<body>
    {{-- 다른 템플릿 포함하는 방법 --}}
    @include('layout.inc.header')

    @yield('con')

    @section('test')
        <h2> 부모 섹션</h2>
    @show

    @yield('if')
    @yield('for')
    @yield('foreach')
    @yield('forelse')

    @include('layout.inc.footer',['key1'=>'셋팅'])
</body>
</html>