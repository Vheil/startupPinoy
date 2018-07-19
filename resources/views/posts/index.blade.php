@extends('layouts.app')

@section('content')

@if(!Auth::guest())
    @if(Auth::user()->role == 'Investor')
	
	<h1 style="text-align: center;"> START-UP Ideas </h1>

		@if(count($posts) > 0)
			@foreach($posts as $post)
		
			
<div class="card">
  <div class="card-header">
    <h2>{{$post->title}} </h2>
  </div>
  <div class="card-body">
    <div class="row">
    	<div class="col-lg-4">
    		<img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap" style="width: 50%;">
    	</div>
    	<div class="col-lg-8">
    		<p class="card-text">Written on: {{$post->created_at}} </p>
            <p class="card-text">Written on: {{$post->user->name}} </p>
		    <p class="card-text">Email address: {{$post->user->email}} </p>
		   	<a href="/posts/{{$post->id}}" class="btn btn-primary" id="zoom1">View Details</a>
    	</div>
    </div>
    
  </div>
</div>


		<hr>
			@endforeach
		
			{{$posts->links()}}
		@else
		<p> No posts found </p>
		@endif
	@else (Auth::user()->role == 'admin')
    <div class="card">
        <div class="card-header">
		<h1 style="text-align: center;"> Start-Up Ideas </h1>
        </div>
        <div class="card-body">
    	@if (count($posts) > 0 )
    	<table class = "table table-striped" >
    	    <tr>
    	        <th> TITLE </th>
    	        <th> Date Created </th>
    	        <th> ACTION </th>
    	        <th>  </th>
    	    </tr>
    	    @foreach ($posts as $post)
    	    <tr>
    	        <td>{{$post->title}}</td>
    	        <td>{{$post->created_at}}</td>
    	        <td><a href="/posts/{{$post->id}}" class="btn btn-primary" id="zoom1">View Details</a></td>
    	        <td></td>
    	    </tr>
    	    @endforeach
    	</table>
    	<hr>
    	{{$posts->links()}}
    	@else
        <p> No posts found </p>
   		 @endif
        </div>
    </div>
	@endif

@endif

@endsection