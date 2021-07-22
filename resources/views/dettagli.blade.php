@extends('layouts.app')
@section('title', 'dettagli')
@section('content')
<div class="pasta_box" style="width: 80%; margin-left: 10%">
    {{-- @dump($paste); --}}

    <img style=" width: 100%; text-align: center" src="{{$paste['src']}}" alt="">
  

</div>

@endsection