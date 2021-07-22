@extends('layouts.app')

@section('title', 'prodotti')

@section('content')
{{-- @dump($paste) --}}
<div class="pasta_container">
    @foreach ($paste as $index => $pasta)
        <div class="pasta_box">

           <img src="{{$pasta['src']}}" alt="">
           <div class="layHover">
              <h3><a href="/laravel-molisana/public/dettagli/{{$index}}">{{$pasta['titolo']}}</a></h3>
           </div>

        </div>


    
    @endforeach

</div>

@endsection


