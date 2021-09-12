<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/principal.css">
    <title>E-Clinica</title>
</head>
<body>

    <nav class="menu">
        @yield('menu-content')
    </nav>

    <header class="cabecalho">
        @yield('cabecalho-content')
    </header>

    <section class="sobre">
        @yield('sobre-content')
    </section>

    <section class="clientes">
        @yield('clientes-content')
    </section>

    <section class="contato">
        @yield('contato-content')
    </section>

    <footer class="rodape">
        @yield('rodape-content')
    </footer>

</body>
</html>
