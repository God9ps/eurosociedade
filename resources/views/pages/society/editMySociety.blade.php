@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="edit">
            <edit-box :society="{{ $society }}"></edit-box>
        </div>
    </div>
@endsection