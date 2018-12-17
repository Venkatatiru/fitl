@extends('layouts.master')

@section('title','Create a Programming language')

@section('content')
  
  <div class="page-header">
  	<h1>Create a Programming language</h1>
  </div>

{!! Form::model($language, ['route' => 'languages.store']) !!}

   @include('languages.partials.object_form')

  <button class="btn btn-success" type="submit">Create Language!</button>


{!! Form::close() !!}

@endsection