<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <header>
            <h1>Compromissos</h1>
        </header>
        <nav>
            <ul>
                <li><a href="/compromissos">Início</a></li>
                <li><a href="/compromissos/create">Cadastrar compromisso</a></li>
            </ul>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>
