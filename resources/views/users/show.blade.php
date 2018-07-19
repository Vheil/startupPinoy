@extends( 'layouts.app' )

@section( 'content' )
<div class="row">
    <div class="col-md-3">
       <div class="card">
            <div class="card-header">Image</div>
            <div class="card-body">
                <img class="img" src="../images/noimage.jpg">
            </div>
         </div> 
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Profile
            	@if(Auth::user()->role == 'admin')
            	{!!Form::open(['action' => ['UsersController@destroy',$users->id], 'method' => 'POST' , 'style' => 'float: right;'])!!}
				{{Form::hidden('_method','DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
				{!!Form::close()!!}
                @endif
            </div>
            <div class="card-body">
                
                <form method="POST" action="#" aria-label="#">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$users->name}}" disabled="#" autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$users->email}}" disabled="#">

                                
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('User\'s Role') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$users->role}}" disabled="#">
                            </div>
                        </div>
                        @if(Auth::user()->role == 'admin')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href= "#" class ="btn btn-primary"> Edit </a>
                            </div>
                            
                        </div>
                        @endif
                    </form>
                
                    
                    

            </div>
            
			
			
         </div>
   </div>
</div>
 	
 		
	

	<!-- <div class="card">
		<div class="card-header">
	    	<h1> {{$users->name}} </h1>
	  	</div>
	  	<div class="card-body">
	    <div class="row">
	    	<div class="col-lg-4">
	    		<img class="card-img-top" src="/storage/cover_images/{{$users->cover_image}}" alt="Card image cap" style="width: 50%;">
	    		<p class="card-text">Written on: {{$users->email}} </p>
			    <p class="card-text">Written on: {{$users->created_at}} </p>
	    	</div>
	    	
	    </div>
	    <hr>
	    	
			
			<div>
			{!!Form::open(['action' => ['UsersController@destroy',$users->id], 'method' => 'POST' , 'style' => 'float: right;'])!!}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
			</div>
			
		
	    
	  </div>
	</div> -->
	
			
		

@endsection