<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blog-home.css') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Crimson+Text" rel='stylesheet' type='text/css'>
	<!-- Fonts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container" >
        <div class="navbar-header" >
            <a class="navbar-brand fn" href="#"><span class="glyphicon glyphicon-list-alt"></span> Todo App </a>
        </div>

    </div>
</div>


	@yield('content')

<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    <div class="container">
        <div class="navbar-text pull-left">
            <p> <span class="glyphicon glyphicon-globe"></span> 2015 Sudip Sarker </p>
        </div>
        <div class="navbar-text pull-right">
            <a href="https://www.facebook.com/sudip.sarker.56"><i class="fa fa-facebook-square fa-2x icon-padding"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x icon-padding"></i></a>
            <a href="#"><i class="fa fa-google-plus fa-2x icon-padding"></i></a>
        </div>
    </div>

</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
