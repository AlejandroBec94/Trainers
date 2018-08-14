@extends('layouts.app')


@section('title','Index')

@section('content')

    <h1>Listado de Trainers</h1>
    <hr>
    <div class="card-group">
            <div class="row">

                @foreach ($trainers as $trainer)
                        <div class="col-sm">
                            <div class="card text-center" style="width: 18rem; margin-top:50px;">

                                <img class="card-img-top rounded-circle mx-auto d-block" style="max-height:100px; max-width:100px; margin:20px;" src="/images/{{ $trainer->avatar }}" alt="{{ $trainer->avatar }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $trainer->name }}</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit beatae corporis natus suscipit fuga debitis maxime minus rerum officiis ut numquam soluta, eum corrupti fugiat itaque aspernatur odit ducimus deleniti?</p>
                                <a href="/trainers/{{ $trainer->id }}" class="btn btn-primary">Ver mas..</a>
                                </div>

                            </div>
                        </div>
                @endforeach
            </div>
        
    </div>

@endsection()