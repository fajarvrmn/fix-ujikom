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
    <!-- CUSTOM STYLE  -->
    <link href="/zontal/css/style.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="/login">

                    <img src="/zontal/img/logoo.png" />
                </a>

            </div>

            <div class="left-div">
                <i class="fa fa-user login-icon" ></i>
        </div>
            </div>
        </div>
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                   
                    <hr />

                     <h4>Login with <strong>Admin Account  :</strong></h4>
                    <br />
                     

                      {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}

                     <label class="{{ $errors->has('email') ? 'has-error' : '' }}">Email : </label>
                     {!! Form::email('email',null,['class'=>'form-control']) !!}
                      {!! $errors->first('email','<p class="help-block">:message</p>') !!}


                        


                        <label class="{{ $errors->has('password') ? 'has-error' : '' }}">Password :  </label>
                       {!! Form::password('password',['class'=>'form-control']) !!}
                       {!! $errors->first('password','<p class="help-block">:message</p>') !!}
                        



                        <hr />
                        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </a>&nbsp;
                         </button>
                </div>
               
{!! Form::close() !!}

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy 2018 Smk Assalaam Bandung | Rekayasa Perangkat Lunak | Ujikom</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="/zontal/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="/zontal/js/bootstrap.js"></script>
</body>
</html>
