@extends('layouts.master')

@section('title',$object->title)


@section('content')

<div class="page-header">
	<a href="{{ action('QuestionController@edit',$object->id) }}"
		class="btn btn-info float-right">Edit</a>
</div>
<h1><?php echo $object->title; ?></h1> 


<p><?php echo $object->description; ?></p>
<pre>
<?php echo $object->code; ?>
</pre>
<p>Question Date: <?php echo $object->created_at; ?></p>

@include('questions.comments.partials.display')

@endsection