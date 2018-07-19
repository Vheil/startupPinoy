@extends('layouts.app')

@section('content')

@if(!Auth::guest())
    
	@if(Auth::user()->role == 'admin' OR Auth::user()->role == 'Start-Up')
       
	<div class="card">
		<div class="card-header">
		<h1 style="text-align: center;"> Investor </h1>
        
		
		</div>
		<div class="card-body">
    	@if (count($users) > 0 )
        
        
    		 <div class="row">
                @foreach ($users as $user)
           
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">{{$user->name}}</h4>
                                    
                                    <a href="/users/{{$user->id}}" class="btn btn-primary"  id="zoom1">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            
                @endforeach
            </div>
    	
    	
    	
    	@else
        <p> No posts found </p>
   		 @endif
   		
        
   	</div>
    <div class="card-footer">
        {{$users->links()}}
    @if(Auth::user()->role == 'admin')
        <a class = "btn btn-primary" href= "/users/create" style="float: right;"> Add User </a>
    @endif
    </div>

   </div>
	@endif

@endif

@endsection

