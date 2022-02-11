<!DOCTYPE html>
<html>
<head>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('./js/bootstrap-table.min.css') }}" />     
        <script type="text/javascript" src="{{ asset('./assets/plugins/lib/modernizr.js') }}"></script>
        
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/plugins/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/plugins/monthly/css/monthly.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/plugins/emojionearea/emojionearea.min.css') }} ">

    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/style-default.css') }} ">
</head>
</head>
<body>
    
    
    <div class="wrapper has-footer">
        
        <header class="header-top navbar fixed-top">
            
            <div class="top-bar">   <!-- START: Responsive Search -->
                <div class="container">
                    <div class="main-search">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.html"><i class="sli-magnifier"></i></a>
                        </div>
                        <span class="close-search search-toggle"><i class="ti-close"></i></span>
                    </div>
                </div>
            </div>  <!-- END: Responsive Search -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}" style="margin-top: 10px">
                    <img src="assets/images/logo.png" style="margin-right : 30px;">
                    <span style="margin-top: 30px;color:#0452a1;font-size: xx-large">ETAP</span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                            <i class="sli-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="search-toggle">
                            <i class="sli-magnifier"></i>
                        </a>
                    </li>
                    
                </ul>   <!-- END: Responsive Top Right tool bar -->
                
            </div>
            
            <div class="collapse navbar-collapse" id="headerNavbarCollapse">
                
                <ul class="nav navbar-nav">
                    
                <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>
                    

                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="main-search hidden-xs">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="#"><i class="sli-magnifier"></i></a>
                        </div>
                    </li>
                    
                    
                    <li class="user-profile dropdown">
                        <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                            <img src="demo/users/téléchargé.jpg" alt="" class="hidden-sm">
                            <div class="user-name">{{ Auth::user()->name }} <small class="fa fa-angle-down"></small></div>
                        </a>
                        <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                            <li><a href="{{ url('/profil') }}"><i class="sli-user"></i> My Profile</a></li>
                            <li><a href="{{ url('/register') }}"><i class="sli-users"></i> Register User</a></li>
                            <li role="#" class="divider"></li>
                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="sli-logout"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- END: Navbar-collapse -->
            
        </header>   <!-- END: Header -->
        
        <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
                    
                    <li>
                        <a href="{{ url('/') }}"><i class="sli-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>
                    
                    
                    
                    <li class="has-submenu">
                        <a href="#submenuOne" data-toggle="collapse" aria-expanded="false">
                            <i class="fs-users"></i> 
                            <span class="nav-text">Table Personnels</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuOne">
                            <ul>
                                <li><a href="{{ url('/personnels') }}">Personnels List</a></li>
                                <li><a href="{{ url('/personnels/create') }}">Create Personnel</a></li>
                            </ul>
                        </div>
                    </li>

                    
                    <li class="has-submenu">
                        <a href="#submenuTwo" data-toggle="collapse" aria-expanded="false">
                            <i class="fs-user-minus"></i> 
                            <span class="nav-text">Table Absences</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuTwo">
                            <ul>
                                <li><a href="{{ url('/absence') }}">Absences List</a></li>
                                <li><a href="{{ url('/absence/create') }}">Create Absence</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="{{ url('/table') }}"><i class="fs-grid-6"></i> <span class="nav-text">Pivot Table</span></a>
                    </li>
                    
                    
                    
      
                    
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->
        
        <div class="container">
    @yield('content')
</div>
        
       
        
    </div>  <!-- END: wrapper -->
   

    <script type="text/javascript" src="{{ asset('./assets/plugins/lib/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('./assets/plugins/lib/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('./assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/lib/plugins.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('./assets/plugins/flot/excanvas.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('./assets/plugins/flot/jquery.flot.tooltip.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/flot/jquery.flot.crosshair.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('./assets/plugins/lib/sparklines.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/lib/jquery.knob.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/monthly/js/monthly.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/plugins/emojionearea/emojionearea.min.js') }}"></script>

    <script type="text/javascript" src=" {{ asset('./assets/js/app.base.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/cmp-todo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/page-dashboard.js') }}"></script>
   


  

<!--    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="../js/bootstrap-table.min.js"></script> -->
</body>
<style>
    .main-search input {
    
    width: 1000px;

}
</style>
</html>
