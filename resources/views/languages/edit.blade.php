@extends('layouts.master')

@section('title','Edit a Programming language')

@section('content')
  
  <div class="page-header">
  	<h1>Edit a Programming language</h1>
  </div>

{!! Form::model($language, 
	['route' => ['languages.update', $language->id],
     'method' => 'put']) !!}

   @include('languages.partials.object_form')

  <button class="btn btn-success" type="submit">Save Changes!</button>


{!! Form::close() !!}

@include('languages.partials.delete_object')

@endsection