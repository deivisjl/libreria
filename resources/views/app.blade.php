<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">
	<link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<style type="text/css">
		@media (min-width: 1200px){
			.container {
			    width: 98% important!;
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
				<a class="navbar-brand" href="/">Líbreria Control</a>
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
								<li><a href="/"><span class="fa fa-users fa-1x"></span> Usuarios</a></li>
								<li><a href="/"><span class="fa fa-unlock-alt fa-1x"></span> Cambiar contraseña</a></li>
            					<li><a href="/"><span class="fa fa-cog fa-1x"></span> Backup</a></li>
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
