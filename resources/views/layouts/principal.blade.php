<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Aprendendo Laravel</title>

  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
    <h1>Aprendendo Laravel<span></span><a href='/'>home</a><span></span><a href='cadastrar'>cadastrar</a>
    </h1>
  </header>
  <main>
@yield('content')
</main>
<footer>
    <p>Aprendendo Laravel - by Edson Luiz Parisotto - <a href='http://www.variavel.com.br/laravel'>www.variavel.com.br/laravel</a></p>
  </footer>
</body>
</html>