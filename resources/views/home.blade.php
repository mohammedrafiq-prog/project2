@extends('layout.app')
@section('content')
    <h1 class="text-secondary">ToDo List</h1>
    @if (count($todos)>0)
        @foreach ($todos as $todo)
            <div class="well">
             <h3>{{ $todo->title}} <a href="todo/{{$todo->id}}" class="btn list-group-item-danger">{{$todo->day}}</a></h3> 
            </div>
        @endforeach
    @endif
@endsection