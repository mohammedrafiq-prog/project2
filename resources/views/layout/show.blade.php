@extends('layout.app')
@section('content')

    <h1 class="text-secondary card-title">{{ $todo->title}} </h1>
  <div class="well">
    <h3><a class="btn list-group-item-danger">{{$todo->day}}</a></h3> 
    <hr>
    <p>{{ $todo->body }}</p></div>
    <a href="/project4/project/todo/{{$todo->id}}/edit" class="btn btn-secondary">Edit</a>
    {!! Form::open(['action' => ['todoc@destroy', $todo->id], 'method' => 'POST']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{Form::submit('DELETE', ['class'=> 'btn btn-danger'])}}


    @endsection