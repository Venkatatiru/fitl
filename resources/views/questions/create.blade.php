@extends('layouts.master')

@section('title','Submit a program question')

@section('content')
  
  <div class="page-header">
  	<h1>Submit a programming question</h1>
  </div>

{!! Form::model($question, ['action' => 'QuestionController@store']) !!}

   <div class="form-group">
    {!! Form::label('title', 'What is your question?') !!}
    {!! Form::text('title','',['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('description', 'Describe your situation in more detail') !!}
    {!! Form::textarea('description','',['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('code', 'Include sample code. (optional)') !!}
    {!! Form::textarea('code','',['class' => 'form-control']) !!}
  </div>

  <button class="btn btn-success" type="submit">Submit your question</button>


{!! Form::close() !!}

@endsection