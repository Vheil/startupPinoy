@extends('layouts.app')

@section('content')

@if(!Auth::guest())
	@if(Auth::user()->role == 'Start-Up' OR Auth::user()->role == 'admin')

	<h1>Edit Post</h1>
	{!!Form::open(['action' => ['PostsController@update' , $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
		<div class ="form-group">
			{{Form::label( 'title' , 'Title' )}}
			{{Form::text( 'title' , $post->title, [ 'class' => 'form-control' , 'placeholder' => 'Title' ] )}}
		</div>
		<div class ="form-group">
			{{Form::label( 'details' , 'Details' )}}
			{{Form::textarea( 'details' , $post->details, [ 'id' => 'article-ckeditor' , 'class' => 'form-control' ])}}
		</div>
		<div class = "form-group" >
			{{ Form::file( 'cover_image')}}
		</div>
			{{Form::hidden('_method','PUT')}}
			{{Form::submit( 'Submit' , ['class' => 'btn btn-primary'])}}
			{!!Form::close()!!}
	@endif
@endif
@endsection