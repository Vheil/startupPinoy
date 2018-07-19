<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>START-UP Pinoy</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
<nav class="navbar navbar-expand-lg navbar-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      @if(!Auth::guest())
        @if(Auth::user()->role == 'Investor')
      <li class="nav-item">
        <a class="nav-link" href="/posts">Start-up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Chat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Business For Sale</a>
          <a class="dropdown-item" href="#">Website For Sale</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Web Design for Start-up</a>
          <a class="dropdown-item" href="#">Consultancy</a>
        </div>
      </li>
        @elseif (Auth::user()->role == 'Start-Up')
      <li class="nav-item">
        <a class="nav-link" href="/investor">Investor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Chat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Business For Sale</a>
          <a class="dropdown-item" href="#">Website For Sale</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Web Design for Start-up</a>
          <a class="dropdown-item" href="#">Consultancy</a>
        </div>
      </li>
      @else (Auth::user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link" href="#">Settings</a>
      </li>
        @endif
      @endif
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
  </div>
</nav>

        
    </div>
    <!-- Scripts -->
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</body>
</html>















<!-- <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
     -->
  <!-- Styles -->
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     -->
    <!-- <link rel="stylesheet" type="text/css" href="resources/assets/css/style.css"> -->

    <style>

        body, html {
/*         font-family: 'Acme', sans-serif; */
				font-family: 'Montserrat', sans-serif;
          
        }

        a { color:white; }

        a:hover { color: white; }

        #mainButton {
            width: 100%;
            height: 150px;
        }
      
      p {
        float: left;
      }

      .container-fluid {
        padding-top: 5px;
      }
      #logo {
        font-size: 88px;
        text-align: center;
				color: #F7B538;
				font-weight: bolder;
				border: solid 2px;
				background-color: #780116;
/*         color: #192BC2; */
/*         text-shadow: 3px 3px #78C0E0; */
        text-shadow: 3px 3px #780116;
      }
      
      #tagline {
        font-size: 28px;
        color: white;
				text-shadow: 2px 2px #780116;
        text-align:center;
				font-family: "Arial Narrow", Arial, sans-serif;
      }
      
    .parallax {
    /* The image used */
    background-image: url("../images/startUp.jpeg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

.parallax1 {
    /* The image used */
    background-image: url("../images/images2.jpeg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }    
      #prospect0{ padding-top: 300px; }
      #prospect{ box-shadow: 3px 5px grey; }
      
       #logo1 {
        text-align: center;
        color: #192BC2;
        text-shadow: 3px 3px #78C0E0;
      }
      
      .parallax2 {
    /* The image used */
    background-image: url("../images/images3.jpeg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }      
      #sideBorder1 { border-right: solid 1px black;}
      #sideBorder2 { border-left: solid 1px black;}
  .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


    </style>

   

    
</head>
<body>
	
  <div class="container-fluid">
    <div class="parallax">
     <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
           <div class="container" style="padding-top: 80px;">
            <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="item animated bounceInDown" id="logo">START-UP Pinoy</h1>
                <h2 id="tagline">PARTNERING WORLDWIDE. . .</h2>
              </div>
            </div>
              </div>
            </div>
        </div>
      </div>
  </div>
  </div>
  <div class="container" style="padding-top: 50px;">
    
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h3>About Us:</h3>
         <p><b>START-UP Pinoy</b> is a bridge between the Philippines and the world that would like to invest into a new opportunity. Philippines is one of the best asian country in asia that most of the BPO company in the US are already invested here due to english proficiency and high demand of possible opportunity. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   </p>
      </div>
    </div>
  </div>
  <div class="container-fluid"> <!-- --- parallax1 -->
    <div class="parallax1">
     <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
           <div class="container">
            <div class="container">
             <div class="row">
                
                <div class="col-lg-6">
                  
                </div>
                <div class="col-lg-6" id="prospect0"><button class="btn btn-block btn-primary" id="prospect" data-toggle="modal" data-target="#exampleModalCenter">Go for a look out!</button></div>
            </div>
              
          </div>
        </div>
      </div>
  </div>
</div> <!-- end parallax1 -->  
  
  <div class="container" style="padding-top: 50px;">
     <div class="row">
      <div class="col-lg-6 colg-md-6">
        <h1 style="text-align: center; padding-top: 30px;" id="sideBorder1">Investor</h1>
      </div>
      <div class="col-lg-6 colg-md-6">
       <p>Are you a small to medium Investor that would like to have a business here in the Philippines but you don't know anyone from here? Here in <b>START-UP Pinoy</b>, you can search a possible start-up that you would like to invest in. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div> 
     </div>
  </div>
  
  <div class="container-fluid"> <!-- --- parallax2 -->
    <div class="parallax2">
     <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
           <div class="container" style="padding-top: 80px;">
            <div class="container">
             <div class="row">
                
                <div class="col-lg-6">
                  
                </div>
                <div class="col-lg-6" id="prospect0"><button class="btn btn-block btn-primary" id="prospect" data-toggle="modal" data-target="#exampleModalCenter">Post your Ideas!</button></div>
            </div>
            </div>
              
          </div>
        </div>
      </div>
  </div>
</div> <!-- end parallax2 -->  
  <div class="container" style="padding-top: 50px;">
     <div class="row">
      <div class="col-lg-6 colg-md-6">
        <p>Are you a newbie and have a great ideas but no capital starting with? Here in <b>START-UP Pinoy</b>, you can share you ideas without any worries to snatch it. Your ideas will only show to possible partner and can only be discussed within you and them. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-lg-6 colg-md-6">
        <h1 style="text-align: center; padding-top: 30px;" id="sideBorder2">Start-Up</h1>
        </div> 
     </div>
  </div>
  <div class="container-fluid">
    
    <div class="parallax">
     <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
           <div class="container" style="padding-top: 80px;">
            <div class="container">
           <div class="row">
                 
                <div class="col-lg-12" id="prospect0"><button class="btn btn-primary" id="prospect" data-toggle="modal" data-target="#exampleModalCenter">Join us!</button></div>
            </div>
              </div>
            </div>
        </div>
      </div>
  </div>
  </div>




  <!-- Log-in Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Log-in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>
		
		
	















	<!-- Registration Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select id="role" type="text" class="form-control" name="role" required>
                                    <option value="Investor">Investor</option>
                                    <option value="Start-Up">Start-Up</option>
                                </select>    
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
        </form>
      </div>
    </div>
  </div>
</div>
 

   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>
