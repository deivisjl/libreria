<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Libreria | Control</title>

	<link href="/css/app.css" rel="stylesheet">
	<link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<style type="text/css">
			.navbar-default {
		    background: linear-gradient(to bottom, #1e5799 0%, #207cca 48%,#207cca 48%,#207cca 49%,#2989d8 68%,#7db9e8 100%) !important;
		    border-color: #ded8d8 !important;
			}
			.navbar-default .navbar-nav > li > a {
			    color: #fff !important;
			}

			.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
					    background-color: #2f70d2 !important;
					    border-radius: 5px !important;
					}
			.navbar-default .navbar-nav > li > a:hover {
			    color: #000 !important;
			}
			.navbar-default .navbar-nav > li > a:focus {
			    background-color: #2f70d2 !important;
					    border-radius: 5px !important;
			}		

			.navbar-default .navbar-brand {
			    color: #fff !important;
			}
		@media (min-width: 1200px){
			.container {
			    width: 98% !important;
		}
	}
			
	</style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Librería Control</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::guest())
					@else
						<li><a href="/"><span class="fa fa-address-book fa-2x"></span> Proveedor</a></li>
						<li><a href="/"><span class="fa fa-archive fa-2x"></span> Producto</a></li>
						<li><a href="/"><span class="fa fa-briefcase fa-2x"></span> Compras</a></li>
						<li><a href="/"><span class="fa fa-search fa-2x"></span> Busqueda</a></li>
						<li><a href="/"><span class="fa fa-vcard fa-2x"></span> Clientes</a></li>
						<li><a href="/"><span class="fa fa-cart-arrow-down fa-2x"></span> Ventas</a></li>
						<li><a href="/"><span class="fa fa-table fa-2x"></span> Reportes</a></li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Iniciar sesión</a></li>
						<!--li><a href="/auth/register">Register</a></li-->
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->email }} <span class="fa fa-user-circle fa-2x"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/"><span class="fa fa-unlock-alt fa-1x"></span> Cambiar contraseña</a></li>
								@if(Auth::user()->rol_id == 1)
								<li><a href="/"><span class="fa fa-users fa-1x"></span> Usuarios</a></li>
            					<li><a href="/"><span class="fa fa-cog fa-1x"></span> Backup</a></li>
            					@endif
								<li><a href="/auth/logout"><span class="fa fa-sign-out fa-1x"></span> Salir</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
