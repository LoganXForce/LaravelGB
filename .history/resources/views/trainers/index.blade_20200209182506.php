@extends('layouts.app')
@section('title', 'Trainers')
@section('content')
    @foreach ($trainers as $trainer)
    <div class="row">
        <div class="col-sm">
         <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p class="card-text">Esto es una prueb de la vista Trainers</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    </div>
    </div>
    @endforeach
    
@endsection

