@extends('layouts.app')

@section('content')

   <!--  <div class="row justify-content-center"> -->
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
            <div class="card-header">Profile</div>
            <div class="card-body">
                
                <form method="POST" action="#" aria-label="#">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" disabled="#" autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" disabled="#">

                                
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('User\'s Role') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->role }}" disabled="#">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href= "/users/{{Auth::user()->id}}/edit" class ="btn btn-primary"> Edit </a>
                            </div>
                            
                        </div>
                    </form>
                
                    
                    

            </div>
         </div>
   </div>
    @if(Auth::user()->role == 'Start-Up')
        <div class="col-md-12">
            <br>
            <div class="card">

                <div class="card-header"><h2>My Concept</h2></div>

                <div class="card-body">
                    
                    <a class = "btn btn-primary" href= "/posts/create" > Create New Ideas </a>
                   
                    @if (session( 'status'))
                        <div class = "alert alert-success" >
                        {{ session( 'status') }}
                        </div>
                    @endif
                    <hr>
                    @if (count($posts) > 0 )
                    <table class = "table table-striped" >
                        <tr>
                            <th> Title </th>
                            <th> Date Created </th>
                            <th> </th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at}}</td>
                                <td><a href="/posts/{{$post->id}}" class="btn btn-primary">View Details</a></td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
                <hr>
                  
        </div>
    </div>
    @elseif (Auth::user()->role == 'Investor')
        <div class="col-md-12">
            <br>
            <div class="card">

                <div class="card-header"><h2>Company Invested</h2></div>

                <div class="card-body">
                    
                    
                  
                </div>
                <hr>
                  
            </div>
        </div>
    @else (Auth::user()->role == 'admin')
        <div class="col-md-12">
            <br>
            <div class="card">

                <div class="card-header"><h2>Dashboard</h2> </div>

                            

                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-4" id="zoom1">
                            <div>
                            <h5 style="text-align: center;">Investor</h5>
                            <a href="/investor" class="btn"><img src="../images/images2.jpeg" style="border-radius: 25%;"></a>
                            </div>
                        </div>
                        <div class="col-lg-4" id="zoom1">
                            <div>
                            <h5 style="text-align: center;">Start-Up</h5>
                            <a href="/users" class="btn"><img src="../images/images3.jpeg" style="border-radius: 25%;"></a>
                            </div>
                        </div>
                        <div class="col-lg-4" id="zoom1">
                            <div>
                            <h5 style="text-align: center;">Concept</h5>
                            <a href="/posts" class="btn"><img src="../images/startUp.jpeg" style="border-radius: 25%;"></a>
                            </div>
                        </div>
                        
                    </div>
                                       
                  
                </div>
                <hr>
                  
            </div>
        </div>
    @endif
</div>

@endsection


