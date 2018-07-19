@extends('layouts.app')

@section('content')
@if(Auth::user()->role == 'Start-Up' OR Auth::user()->role == 'admin')
	<h1>Create Post</h1>
	{!! Form::open([ 'action' => 'PostsController@store' , 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
		<div class ="form-group">
			{{Form::label( 'title' , 'Title' )}}
			{{Form::text( 'title' , '' , [ 'class' => 'form-control' , 'placeholder' => 'Title' ] )}}
		</div>
		<div class= "form-group" >
			{{Form::label( 'details' , 'Details' )}}
			{{Form::textarea( 'details' , '' , [ 'id' => 'article-ckeditor' ,'class' => 'form-control' , 'placeholder' 	=> 'Kindly indicate full details of your concept.' ] )}}
		</div>
		<div class ="form-group">
			{{Form::file('cover_image')}}
		</div>
			{{Form::submit('submit' , [ 'class' => 'btn btn-primary' ])}}
			{!! Form::close() !!}
@endif
@endsection
