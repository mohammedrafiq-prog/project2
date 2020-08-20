@extends('layout.app')
@section('content')
{!! Form::open(['action' => ['todoc@update', $todo->id], 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('name', 'Title')}}
      {{Form::text('title', $todo->title, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('DAY', 'Day')}}
      {{Form::date('day', $todo->day, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('body', $todo->body, ['class' => 'form-control'])}}
    </div>
    <div>
         {{ Form::hidden('_method', 'PUT') }}
    {{Form::submit('submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection