<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <header>
    <nav class="navbar navbar-expand navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
         <img src="/img/home.png" alt="home" >

            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Projeto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projeto/create">Criar Projeto</a>
                </li>
               
            </ul>
        </div>
    </nav>
    </header>
    @yield('content')

<footer>Gerenciar projetos - Tainá Miranda &copy; @2024</footer>
</body>
</html>