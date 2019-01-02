@extends('layouts.app')

@section('title','Contact')

@section('content')
<h1>Contact</h1>
{!! Form::open(['url'=> '/contact/submit']) !!}
	<div class="form-group">
		{{Form::label('name','Name:')}}
		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter name'])}}
	</div>

	<div class="form-group">
		{{Form::label('email','Email Address:')}}
		{{Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
	</div>


	<div class="form-group">
		{{Form::label('message','Message:')}}
		{{Form::textarea ('message','',['class'=>'form-control','placeholder'=>'Enter Message'])}}
	</div>

	<div>
		{{Form::submit('Submit',['class'=>'btn-btn-primary btn-lg' ])}}
	
	</div>


{!!  Form::close() !!}
@endsection