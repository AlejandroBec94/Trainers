@extends('layouts.app')


@section('title','Index')

@section('content')

    <h1>Listado de Trainers</h1>
    <hr>
    <div class="card-group">

        @foreach ($trainers as $trainer)

            <div class="card" style="width: 18rem;">

                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $trainer->name }}</h5>
                    <p class="card-text">{{ $trainer->created_at }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>

        @endforeach
        
    </div>

@endsection()