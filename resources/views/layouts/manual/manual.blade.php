<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page')</title>
    <link rel="stylesheet" type="text/css" href="/manual/css/root.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="/manual/css/manual.css">
</head>
<body>
<!-- Topo da pagina -->
<header class="top">
    <div class="top_title">
        <div>
            <h1>Manual do Usuário</h1>
            <h2>Enter Site Slogan</h2>
        </div>
    </div>
    
    <nav class="top_menu">
        <div class="top_menu_options">
            <ul>
                <a href="{{ route('manual.home') }}"><button id="nav_button">Inicio</button></a>
                <div class="option_drop">
                    <a href="{{ route('manual.users') }}"><button id="nav_button">Usuário</button></a>
                        <ul id="top_menu_drop">
                            <a href="#"><button id="nav_button">Aluno</button></a>
                            <a href="#"><button id="nav_button">Professor</button></a>
                        </ul>
                </div>
                <a href="{{ route('manual.projects') }}"><button id="nav_button">Projetos</button></a>
                <a href="{{ route('manual.invites') }}"><button id="nav_button">Convites</button></a>
                <a href="{{ route('manual.challenges') }}"><button id="nav_button">Desafios</button></a>
            </ul>
        </div>
    </nav>
</header>
<!-- /Topo da pagina -->

<aside class="aside_menu">
    <div class="menu_redirect">
        <div class="redirect">
            <h1>Súmario</h1>
            <div class="menu_options">
                @yield('sumary')
            </div>
        </div>
    </div>
</aside>

<main class="content">
    @yield('content')
</main>

<footer class="final">
    <div class="contacts">
        <h2>Contatos</h2>
        <ul>
            <li>juliana.n@ba.estudante.senai.br</li>
            <li>guilherme.k.santos@ba.estudante.senai.br</li>
            <li>l.rabelo@ba.estudante.senai.br</li>
            <li>luis.h.jesus@ba.estudante.senai.br</li>
        </ul>
    </div>

    <div class="services">
        <h2>Serviços</h2>
        <div class="services_options">
            @yield('footer_services')
        </div>
    </div>

    <div class="FAQ">
        <h2>Links</h2>
        <div class="FAQ_options">
            @yield('footer_FAQ')
        </div>
    </div>
</footer>
</body>
</html>