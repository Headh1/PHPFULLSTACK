{{-- 상속 --}}
@extends('layout.layout')

@section('title','자식타이틀')

@section('con')
    <h2>hi</h2>
    <p>hello</p>
@endsection

@section('if')
<hr>
<h5>if</h5>
@if ($data['gender']==='m')
    <span>남자</span>
@elseif($data['addr']==='대구')
    <span>대구사람</span>
@else
    <span>bye</span>
@endif
@endsection

@section('for')
<hr>
<h5>for</h5>
@for($i = 0; $i < 5; $i++)
    <span>{{$i}}</span>
@endfor
@endsection


@section('foreach')
<hr>
<h5>foreach</h5>
@foreach($data as $key => $val)
    <span>{{$loop->count.' >> '.$loop->iteration.'  '}}</span>
    <span>{{$key.' : '.$val}}</span>
    <br>
@endforeach
@endsection

@section('forelse')
<hr>
<h5>forelse</h5>
@forelse($data2 as $key => $val)
    <br>
@empty
    <span>빈배열</span>
@endforelse
@endsection