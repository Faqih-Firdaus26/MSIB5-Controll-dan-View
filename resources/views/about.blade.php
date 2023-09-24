@extends('layouts.main')

@section('container')


    <h1 class="text-center">About Me</h1>

    <h3>Hello my name, <br>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <p>{{ $univ }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="300" height="300" class="img-thumbnail rounded-circle">

@endsection