
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>{{ config('app.name', 'Mobile') }}</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="/zontal/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="/zontal/css/font-awesome.css" rel="stylesheet" />
            <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
                


    <!-- CUSTOM STYLE  -->
    <link href="/zontal/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/home') }}">

                    <img src="/zontal/img/logoo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>

                             @else

                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">

                                <div class="media">
                                    <a class="media-left" href="">
                                        <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ Auth::user()->name }} </h4>
                                      
                                    </div>
                                </div>
                              <hr/>

                              

                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                            </div>
                            @endif
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->

    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <ul id="menu-top" class="nav navbar-nav navbar-left">
                    
                    
                    @role('superadmin')
                    <li><a href="{{ route('Account.index') }}"></i>&nbsp;&nbsp;Management Account</a></li>
                    <li><a href="{{ route('Merek.index') }}"></i>&nbsp;&nbsp;Merek</a></li>
                     @endrole
                </ul>
                    <div class="navbar-collapse collapse ">


                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            
                        <li><a class="" href="{{ ('/home') }}" class="fa fa-bullseye">Dashboard</a></li>
                        <li><a href="{{ route('Catalog.index') }}"></i>&nbsp;&nbsp;Catalog Mobil</a></li>
                        <li><a href="{{ route('Detail.index') }}"></i>&nbsp;&nbsp;Detail Catalog</a></li>
                        <li><a href="{{ route('Berita.index') }}"></i>&nbsp;&nbsp;Berita</a></li>                              
                                @role('superadmin') 
                                <li><a href="{{ route('Kontak.index') }}"></i>&nbsp;&nbsp;Kritik&saran</a></li>
                                @endrole
                         

                        </ul>
                    </div>
                </div>
        

                      

            </div>
        </div>
    </section>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Halaman Admin</h4>
            @yield('content')




               
    <!-- CONTENT-WRAPPER SECTION END-->
  
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="/zontal/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="/zontal/js/bootstrap.js"></script>

     <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>


     @yield('scripts')

</body>
</html>
