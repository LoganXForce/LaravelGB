@extends('layouts.app')
@section('title', 'Trainers')
@section('content')
    @foreach ($trainers as $trainer)
        <p>{{$trainer->name}}</p>
    @endforeach
    
@endsection

