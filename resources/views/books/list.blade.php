@extends('template')

@section('title')
    Lista książek
@endsection

@section('content')

<div class="container">
    {{$booksList}}
</div>
@endsection('content')

