<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrarse</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<header id="inicio" class="">
		<h1>Registro al Foro</h1>
	</header><!-- /header -->
	<section id="login">
        {{ Form::open('/registrarse') }}
			{{ Form::label('usuario', 'Usuario') }}
			{{ Form::text('password', 'Password') }}
			{{ Form::submit('Registrarse') }}

        {{ Form::close() }}
    </section>
</body>
</html>