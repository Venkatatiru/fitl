
@extends('layouts.master')

@section('title','Programming Questions')

@section('content')

<div class="Row">
	
@include('shared.questions_sidebar')	

   <div class="col-sm-9">

		<div class="page-header">
		  <a href="{{ url('questions/create') }}" class="btn btn-success float-right">+ Question</a>
			<h1>Programming Questions</h1>
		</div>

		@include('questions.partials.questions')


    </div> <!-- col-sm-9 -->



</div>  <!-- Row -->


@endsection