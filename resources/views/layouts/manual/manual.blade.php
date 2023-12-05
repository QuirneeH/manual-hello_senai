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
<!-- Topo da página -->
<header class="top">

    <!-- Titulo no topo da página -->
    <div class="top_title">
        <div>
            <h1>Manual do Usuário</h1>
            <h2>Enter Site Slogan</h2>
        </div>
    </div>
    <!-- /Titulo no topo da página -->
    
    <!-- Menu lateral no top -->
    <nav class="top_menu">

        <!-- Opções do Menu -->
        <div class="top_menu_options">
            <ul>
                <a href="{{ route('manual.home') }}"><button id="nav_button">Inicio</button></a>
                <div class="option_drop">
                    <a href="{{ route('manual.users') }}"><button id="nav_button">Usuário</button></a>
                        <ul id="top_menu_drop">
                            <a href="{{ route('manual.users') }}#user_A"><button id="nav_button">Aluno</button></a>
                            <a href="{{ route('manual.users') }}#user_P"><button id="nav_button">Professor</button></a>
                        </ul>
                    </div>
                <a href="{{ route('manual.projects') }}"><button id="nav_button">Projetos</button></a>
                <a href="{{ route('manual.invites') }}"><button id="nav_button">Convites</button></a>
                <a href="{{ route('manual.challenges') }}"><button id="nav_button">Desafios</button></a>
            </ul>
        </div>
        <!-- /Opções do Menu -->
    </nav>
    <!-- /Menu lateral no top -->
</header>
<!-- /Topo da pagina -->

<!-- Súmario lateral -->
@php
    $url = $_SERVER["REQUEST_URI"];
@endphp

@if($url == '/manual/inicio')

@else
<aside class="aside_menu">
    <div class="menu_scroll">
        <!-- Titulo -->
        <h1>Súmario</h1>
        <!-- Opções -->
        <div class="menu_options">
            @yield('sumary')
        </div>
    </div>
</aside>
@endif

<!-- /Súmario lateral -->

<!-- Conteúdo da página -->
<main class="content">
    @yield('content')
</main>
<!-- /Conteúdo da página -->

<!-- Rodapé -->
<footer class="final">
    <!-- Contatos -->
    <div class="contacts">
        <h1>Contatos</h1>
        <ul>
            <li>juliana.n@ba.estudante.senai.br</li>
            <li>guilherme.k.santos@ba.estudante.senai.br</li>
            <li>l.rabelo@ba.estudante.senai.br</li>
            <li>luis.h.jesus@ba.estudante.senai.br</li>
        </ul>
    </div>
    <!-- /Contatos -->

    <!-- Possiblilidades -->
    <div class="services">
        <h1>Serviços</h1>
        <div class="services_options">
            @yield('footer_services')
        </div>
    </div>
    <!-- /Possiblilidades -->

    <!-- Links -->
    <div class="links">
        <h1>Links</h1>
        <div class="links_options">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">GitHub</a></li>
            </ul>
        </div>
    </div>
    <!-- /Links -->
</footer>
<!-- /Rodapé -->
</body>
</html>