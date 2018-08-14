@extends('layouts.app')


@section('title','Show')

@section('content')

    <h1>{{ $trainer->name }}</h1>
    <img class="card-img-top rounded-circle mx-auto d-block" style="max-height:100px; max-width:100px; margin:20px;" src="/images/1534260042tux.jpg" 
    <hr>

    <a href="/trainers/{{ $trainer->id }}/edit" class="btn btn-primary text-center">Editar</a>

    
@endsection()