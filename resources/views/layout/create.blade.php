
@extends('layout.app')
@section('content')
    

{!! Form::open(['action' => 'todoc@store']) !!}
    <div class="form-group">
      {{Form::label('name', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('DAY', 'Day')}}
      {{Form::date('day', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter todo'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection