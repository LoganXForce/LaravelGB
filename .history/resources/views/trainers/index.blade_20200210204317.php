@extends('layouts.app')
@section('title', 'Trainers')
@section('content')

    <div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="public/images/{{$trainer->avatar}}" alt="">    
        <div class="card-body">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p class="card-text">Esto es una prueb de la vista Trainers</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    </div>
    @endforeach
    </div>
@endsection

