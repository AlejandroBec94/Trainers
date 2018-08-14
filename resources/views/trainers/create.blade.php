@extends('layouts.app')


@section('title','Trainers Create')

@section('content')

    <form class="form-group" method="POST" action="/trainers/index" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
                <label for="exampleInputEmail1">Entrenador</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Avatar</label>
            <input type="file" class="form-control" name="avatar" >
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection()