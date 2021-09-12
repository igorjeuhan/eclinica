<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/adm.css">
    <title>Painel Administrativo</title>
</head>
<body>

    <nav class="menu">
        @yield('menu-content')
    </nav>

    <section class="cadastro">
        @yield('form-cadastro')
    </section>

    <section class="clientes">
        @yield('list-clientes')
    </section>

</body>
</html>
