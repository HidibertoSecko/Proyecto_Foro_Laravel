<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Foro</title>
    <link rel="stylesheet"  href="css/estilo.css">
    
</head>
<body>
  <br><br><br>
    <header id="inicio" class="">
    
    <svg viewbox="10 -5 105 20">
    <defs>
        <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
             <stop offset="5%" stop-color="white"/>
            <stop offset="95%" stop-color="#white"/>
        </linearGradient>
    <pattern id="wave" x="0" y="0" width="250" height="20" patternUnits="userSpaceOnUse">
      <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
        <animateTransform
            attributeName="transform"
            begin="0s"
            dur="1.5s"
            type="translate"
            from="0,0"
            to="40,0"
            repeatCount="indefinite" />
      </path>
    </pattern>
  </defs>
  <text text-anchor="middle" x="70" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">REGISTRO</text>
  <text text-anchor="middle" x="70" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.2">REGISTRO</text>
</svg>

        
    </header><!-- /header -->
    <section id="login" align="center">
        {{Form ::open(['route'=>'user.crear', 'method'=>'post'])}}
        {{Form::label('nombre_usuario','Nombres de usuario')}}
        {{Form::text('nombre_usuario', ' ',['id'->'nombre_usuario'])}}<br><br>

        {{Form::label('email','Correo electronico')}}
        {{Form::text('email', ' ',['id'->'email'])}}<br><br>

        {{Form::password('password','Contraseña')}}
        {{Form::text('password', ' ',['id'->'password'])}}<br><br>


        {{Form::submit('Guardar')}}
        {{Form::reset('Cancelar')}}

        {{Form::close() }}
    </section>
</body>
</html>
