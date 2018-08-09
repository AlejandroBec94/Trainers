@extends('layouts.app')


@section('title','Trainers Create')

@section('content')

    <form class="form-group" method="POST" action="/trainers">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Entrenador</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection()