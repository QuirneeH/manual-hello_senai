<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Desafio')

<!-- Conteudo de Desafio -->
@section('content')
<h1>Introdução</h1>
<p>Um incentivo ao estudo é importante para o aprendizado do aluno, isso que a nossa plataforma acredita e proporciona um espaço para desenvolvimento pessoal e profissional. Pensando nisso, adicionamos um incentivo mais "desafiador" para nossos alunos.</p>
<p>Desafios são problemas elaborados pelos seus professores para os alunos de Desenvolvimento de Sistemas implementarem uma solução para o mesmo problema postando essas ideias na página do Desafio para que os professores possam avaliá-las e determinar a melhor ou as melhores soluções para o problema.</p>

<h2 id="create">Criação de um Desafio</h2>
<p>Os Professores na criação do Desafio é importante que a descrição sobre a proposta esteja bem elaborada  para facilitar a interação dos alunos, pois, algumasmaneira de dizer nomes na área da programação podem não ser do entendimento de alguns alunos iniciantes.</p>

<p>Pensado nas informações vamos a criação.</p>
<ul>
    <div class="tutorial">
        <div id="image">
            <li>Primeiro você precisa acessar a página de desafios, clicando no botão "Desafios".</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Após acessar a página de desafio, você deve clicar no opção "Criar Desafio", onde abrirá um popup para a criação do desafio</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Agora você pode preencher as informações como: título, descrição e definir uma imagem para o seu desafio.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>
</ul>

<h2>Criando um Projeto para Desafio</h2>
<p>Os Alunos Estando na página de Desafios poderá visualizar uma lista com todos os desafios disponíveis, acessando um Desafio em específico o aluno poderá aceitar, permitindo que possa criar um projeto para atender o desafio proposto para que os professores e os alunos possam visualizar, porém, apenas professores poderão avaliá-lo.</p>
<ul>
EM PRODUÇÃO
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