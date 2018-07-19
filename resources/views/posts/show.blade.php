@extends( 'layouts.app' )

@section( 'content' )

 	
 		
	@if(!Auth::guest())
		@if(Auth::user()->id == $posts->user_id OR Auth::user()->role == 'Investor' OR Auth::user()->role == 'admin')

	<div class="card">
	  <div class="card-header">
	    <h1 style="float: left;">{{$posts->title}} </h1>
	    @if(Auth::user()->id == $posts->user_id OR Auth::user()->role == 'admin')
	    <a href= "/posts/{{$posts ->id}}/edit" class ="btn btn-primary" style="float: right;"> Edit </a>
	    @endif
	  </div>
	  <div class="card-body">
	    <div class="row">
	    	<div class="col-lg-4">
	    		<img class="card-img-top" src="/storage/cover_images/{{$posts->cover_image}}" alt="Card image cap" style="width: 50%;">
	    		<p class="card-text">Written on: {{$posts->created_at}} </p>
			    <p class="card-text">Written on: {{$posts->user->name}} </p>
	    	</div>
	    	<div class="col-lg-8">
	    		<h3>Details:</h3>
	    		<p>{!!$posts->details!!}</p>
			   	
	    	</div>
	    </div>
	    <hr>
	    	@if(Auth::user()->id == $posts->user_id OR Auth::user()->role == 'admin')
			
			<div>
			{!!Form::open(['action' => ['PostsController@destroy',$posts->id], 'method' => 'POST' , 'style' => 'float: right;'])!!}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
			</div>
			
		@endif	
	    
	  </div>
	</div>
	
			
		@else
		<h1>You are not permitted to view this page.</h1>
		@endif
		

	@endif
 	

@endsection