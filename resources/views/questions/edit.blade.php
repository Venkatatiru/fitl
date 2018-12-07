@extends('layouts.master')

@section('title','Edit a program question')

@section('content')
  
  <div class="page-header">
  	<h1>Edit a programming question</h1>
  </div>

{!! Form::model($question, ['action' => ['QuestionController@update', $question->id]
 , 'method' => 'put'])
  !!}

   @include('questions.partials.object_form')

  <button class="btn btn-success" type="submit">Update the  question</button>


{!! Form::close() !!}

@include('questions.partials.delete_object')

@endsection