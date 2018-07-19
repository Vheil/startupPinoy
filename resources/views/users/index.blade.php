@extends('layouts.app')

@section('content')

@if(!Auth::guest())
    
	@if (Auth::user()->role == 'admin')
        @if (count($users) > 0 )
        <div class="card">
            <div class="card-header">
                <h1 style="text-align: center;">Start-Up Users </h1>
           </div>
        <div class="card-body">
        <div class="row">
            @foreach ($users as $user)
        <div class="col-md-4" id="zoom">
            
    
        <div class="card card-profile">
            <div class="card-image">
                <a href="/users/{{$user->id}}"> <img class="img" src="../images/noimage.jpg">
                    <div class="card-caption"> {{$user->name}}</div>
                </a>
            </div>
            <div class="container">
                <br>
                
                
                <a href= "/users/{{$user->id}}/edit" class ="btn btn-primary"> Edit </a>
                {!!Form::open(['action' => ['UsersController@destroy',$user->id], 'method' => 'POST' , 'style' => 'float: right;'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                <br>
                <br>
                
            </div>
        </div>
   
            
             </div>
             @endforeach
             </div>
             <div class="card-footer">
        {{$users->links()}}
        <a class = "btn btn-primary" href= "/users/create" style="float: right;"> Add User </a>
    </div>
    </div>
    </div>
       @endif
	<!-- <div class="card">
		<div class="card-header">
		<h1 style="text-align: center;">Start-Up Users </h1>
        
		
		</div>
		<div class="card-body">
    	@if (count($users) > 0 )
        
        
    		 <div class="row">
                @foreach ($users as $user)
           
            <div class="col-xs-12 col-sm-6 col-md-4"  id="zoom">
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
        <a class = "btn btn-primary" href= "/users/create" style="float: right;"> Add User </a>
    </div>

   </div> -->
	@endif

@endif

@endsection

