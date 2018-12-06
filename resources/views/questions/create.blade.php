@extends('layouts.master')

@section('title','Submit a program question')

@section('content')
  
  <div class="page-header">
  	<h1>Submit a programming question</h1>
  </div>

{!! Form::model($question, ['action' => 'QuestionController@store']) !!}

   @include('questions.partials.object_form')

  <button class="btn btn-success" type="submit">Submit your question</button>


{!! Form::close() !!}

@endsection