<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Desafio')

<!-- Conteudo de Desafio -->
@section('content')
<h1>Introdução</h1>
<p>Um incentivo ao estudo é importante para o aprendizado do aluno, isso que a nossa plataforma acredita e proporciona um espaço para desenvolvimento pessoal e profissional. Pensando nisso, adicionamos um incentivo mais "desafiador" para nossos alunos.</p>
<p>Desafios são problemas elaborados pelos seus professores para os alunos de Desenvolvimento de Sistemas implementarem uma solução para o mesmo problema postando essas ideias na página do Desafio para que os professores possam avaliá-las e determinar a melhor ou as melhores soluções para o problema.</p>

<h2 id="create">Criação de um Desafio (Professor)</h2>
<p>Os Professores na criação do Desafio é importante que a descrição sobre a proposta esteja bem elaborada  para facilitar a interação dos alunos, pois, algumas maneiras de dizer nomes na área da programação podem não ser do entendimento de alguns alunos iniciantes.</p>

<p>Pensado nas informações vamos a criação.</p>
<ul>
    <div class="tutorial">
        <div id="image">
            <li>Primeiro você precisa acessar a página de desafios, clicando no botão "Desafios".</li>
            <img src="/manual/images/home-desafio.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Após acessar a página de desafio, clique na sua propria pagina de desafio.</li>
            <img src="/manual/images/desafio-1.png" alt="">
        </div>
    </div>

    <div class="error">
        <p><b>[AJUDA]: </b>Cada pagina do professor está com seu respectivo nome passado na criação de seu perfil.</p>
    </div><br>

    <div class="tutorial">
        <div id="image">
            <li>Na sua página particular de Projetos clique em "Criar Desafio".</li>
            <img src="/manual/images/desafio-2.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Abrirá o modal de "Criação de Desafio", preencha as informações do Desafio.</li>
            <img src="/manual/images/desafio-3.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Pronto seu Desafio foi criado.</li>
            <img src="/manual/images/desafio-4.png" alt="">
        </div>
    </div>
</ul>

<h2>Criando um Projeto para Desafio</h2>
<p>Estando na página de Desafios poderá visualizar uma lista com todos os desafios disponíveis, acessando um Desafio em específico o aluno poderá aceitar, permitindo que possa criar um projeto para atender o desafio proposto para que os professores e os alunos possam visualizar, porém, apenas professores poderão avaliá-lo.</p>

<ul>
    <div class="tutorial">
        <div id="image">
            <li>Abra a pagina de Desafios.</li>
            <img src="/manual/images/home-desafio.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Clique no painel do professor.</li>
            <img src="/manual/images/desafio-parti-1.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Na aba do professor aberta, terá todos os desafios postados pelo professor listados, selecione o desafio que deseja participar.</li>
            <img src="/manual/images/desafio-parti-2.png" alt="">
        </div>
    </div>

    <div class="error">
        <p>A realização da criação é semelhante a da criação de um projeto. <a href="">Clique aqui</a> para ver o passo a passo de como criar um projeto</p>
    </div>
</ul>
@endsection
<!-- /Conteudo de Desafio -->

<!-- Súmario -->
@section('sumary')
<ul>
    <li>
        <a href="#">Professores</a>
        <ol>
            <li><a href="#create">Criar Desafio</a></li>
        </ol>
    </li>

    <li>
        <a href="#">Alunos</a>
        <ol>
        <li><a href="#">Criar Desafio</a></li>
        </ol>
    </li>
</ul>
@endsection

<!-- Redirecionamento para outras Funcionalidades -->
@section('footer_services')
<ul>
    <a href="#"><button id="nav_button"></button></a>
    <a href="#"><button id="nav_button"></button></a>
    <a href="#"><button id="nav_button"></button></a>
</ul>
@endsection