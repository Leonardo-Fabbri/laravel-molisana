@extends('layouts.app')
@section('title', 'dettagli')
@section('content')
<div class="pasta_box">
    {{-- @dump($paste); --}}

    <img src="{{$paste['src']}}" alt="">
    <div class="layHover">
       <h3>{{$paste['titolo']}}</h3>
    </div>

</div>

@endsection