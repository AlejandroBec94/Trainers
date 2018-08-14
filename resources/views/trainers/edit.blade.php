@extends('layouts.app')


@section('title','Trainers Edit')

@section('content')

    <form class="form-group" method="POST" action="/trainers/{{$trainer->id}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
                <label for="exampleInputEmail1">Entrenador</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $trainer->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Avatar</label>
            <input type="file" class="form-control" name="avatar" >
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection()