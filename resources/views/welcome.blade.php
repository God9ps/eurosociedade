@extends('layouts.app')

@section('content')
    <a href="{{ URL::to('/jogadores') }}">URL::to</a>
    <br>
    <a href="{{ route('jogadores.index', ['players' => 'Serrano']) }}">route</a>
@endsection