<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/animate-it/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lib/cmp-bs-checkbox.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/lib/page-login.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>

    <div class="container">
        
        <div class="animatedParent">
            <div class="row">
                
                <div class="col-md-6 col-sm-6 hidden-xs">
                    
                    <h3 class="sign animated flipInX">Take it all of with you and we</h3>
                    <p class="small animated flipInX">Smart device and pick up every where our service.</p>
                    
                    <div class='slider'>
                        <div class='slide1'></div>
                        <div class='slide2'></div>
                        <div class='slide3'></div>
                        <div class='slide4'></div>
                    </div>
                    
                    <h3 class="sign animated flipInX">One account give all service</h3>
                    <p class="small animated flipInX">you can connect with us.</p>
                    
                    <ul class="list-inline social">
                        <li><a href="#"><i class="fa fa-facebook hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-wordpress hvr-buzz-out" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo hvr-buzz-out" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                
                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4">
                    
                    <div class="blue-line sm normal"></div>
                    
                    <div class="signup-box">
                        <div class="logo"><img src="assets/images/logo-c.svg" alt="" style="height: 40px;"></div>
                        
                        

                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Useremail">
                                <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                            
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <div class="forgot"><a href="#">Forgot?</a></div>
                            </div>

                            

                            <div class="checkbox checkbox-primary">
                                <input id="rememberMe" class="styled" type="checkbox" checked>
                                <label for="rememberMe"> Stay signed in</label>
                            </div>

                            <button href="#" type="submit" class="btn btn-primary btn-block">Login</button>

                               
                    </form>
                    </div>
                    
                    <br>
                    <div class="signup-box">
                        <p class="signac animated flipInX">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                    </div>
                    
                    <div class="blue-line lg normal"></div>
                </div>
            </div>
        </div>
    </div>  <!-- Container End --> 
    
    
    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/animate-it/animate-it.js"></script>
    <script type="text/javascript" src="assets/plugins/animate-it/arrow-line.js"></script>
</body>
</html>