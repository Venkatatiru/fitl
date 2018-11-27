@extends('layouts.master')

@section('title','Submit a program question')

@section('content')

{!! Form::model($question, ['action' => 'QuestionController@store']) !!}

{!! Form::close() !!}

@endsection