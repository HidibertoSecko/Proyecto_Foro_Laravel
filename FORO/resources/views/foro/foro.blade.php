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
    <svg viewbox="0 0 100 20">
      <defs>
        <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
            <stop offset="20%" stop-color="white"/>
            <stop offset="95%" stop-color="#white"/>
        </linearGradient>
        <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
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
          <text text-anchor="middle" x="60" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">FORO</text>
          <text text-anchor="middle" x="60" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.2">FORO</text>
    </svg>
            <input type="button" name="" value="Comenta que tema quieres Discutir">
            <input type="button" name="" value=":">
            <a href="/tema" title="">
                  <input type="button" name="" value="Comentar nuevo tema" >
              </a>
          
            
            <br><br>
  </header><!-- /header -->

<table border="3" width="60%" align="center">
   <thead>
        <tr>
          <th>Puedes responder a cualquier tema </th>
        </tr>
      </thead>
  <tbody>
  @foreach($tema as $tema)
    <tr>
      <table border="2" width="60%" align="center">
        <thead>
          <tr>
            <th width="10%">{{ $tema -> usuario_id }}</th>
            <th align="left">{{ $tema -> title_tema }}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2">{{ $tema ->tema }}</td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <a href="respuesta" title="">
                  <input type="button" name="registrarse" value="respuestas" >
              </a>
            </td>  
          </tr>
        </tbody>
      </table>
    </tr>
  @endforeach
</tbody>
</table>
</body>
</html>
