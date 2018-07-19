
@extends('layouts.app')

@section('content')



	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    {!!Form::open(['action' => ['UsersController@update' , $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                     @csrf
        <div class ="form-group">
            {{Form::label( 'name' , 'Name' )}}
            {{Form::text( 'name' , $user->name, [ 'class' => 'form-control' , 'placeholder' => 'Title' ] )}}
        </div>
        <div class ="form-group">
            {{Form::label( 'email' , 'Email Address' )}}
            {{Form::text( 'email' , $user->email, [ 'class' => 'form-control' ])}}
        </div>
        <div class ="form-group">
            {{Form::label( 'password' , 'Password' )}}
            {{Form::text( 'password' , '', [ 'class' => 'form-control' ])}}
        </div>
        <div class="form-group">
            <label for="role" >{{ __('Role') }}</label>

           
                <select id="role" type="text" class="form-control" name="role" value="$user-role">
                    <option value="Investor">Investor</option>
                    <option value="Start-Up">Start-Up</option>
                </select>    
            
         </div>
        
            {{Form::hidden('_method','PUT')}}
            {{Form::submit( 'Submit' , ['class' => 'btn btn-primary'])}}
            {!!Form::close()!!}




                   
                </div>
            </div>
        </div>
    </div>
</div>

   
@endsection