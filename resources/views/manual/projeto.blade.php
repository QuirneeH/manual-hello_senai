<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Projeto')

<!-- Conteudo de Projeto -->
@section('content')
<h1>Introdução</h1>
<p>O espaço para projetos você terá a oportunidade de reunir ideias, trabalhar em equipe e desenvolver projetos empolgantes de maneira colaborativa. Nossa plataforma foi projetada para fornecer um ambiente intuitivo e eficiente para transformar suas ideias em realidade.</p>

<h2>Criar Projeto</h2>
<p>Você como Aluno tem a opção de criar Projetos na plataforma, nele será mostrado como está o desenvolvimento do seu projeto, ou até como ficou o resultado final:</p>
<ul>
    <li>Primeiro você precisa acessar a página de projetos, clicando no botão “meus projetos”.</li><br>
    <li>Após acessar a página de desafio, você deve clicar na opção “criar projetos”, onde abrirá uma página para a criação do desafio.
    </li><br>
    <li>Agora você pode preencher as informações como: título, descrição, definir uma imagem para o seu projeto, definir os participantes do projeto e colocar o link do repositório do projeto do github<br><br>
    <b>[ATENÇÃO:: Para serem postados, os projetos têm de ter obrigatoriamente um repositorio no github].</b></li>
</ul><br>

<h2>Comentário</h2>
<p>Todos os usuários tanto Alunos quanto professores mesmos não participando do projeto podem fazer comentários em projetos. Interação é bem importante para o aprendizado.</p>
<ul>
    <li>Antes de tudo, primeiro você precisa acessar o perfil do criador do projeto … –(explicação para acessar o perfil)--.</li><br>
    <li>Após acessar o perfil dele você deve ir na opção “meus projetos”, onde serão listados os seus projetos listados, e escolher o projeto que deseja fazer um comentário.</li><br>
    <li>Clique na caixa de texto e digite seu comentário.</li><br>
    <li>Terminado sua escrita clique no botão –(botão de comentar)--.</li>
</ul><br>

<h2>Definir acesso de participantes em um Projeto</h2>
<p>O Aluno dono de um projeto pode definir participantes que estão fazendo parte da construção do projeto, caso um Aluno dono defina outro Aluno como participante do seu projeto, ele poderá definir 2 tipos de acesso do projeto o Aluno participante:</p><br>
<ol>
    <li><h3>Visualizador: </h3>Aluno participante que poderá apenas visualizar a página e fazer comentários no Projeto.</li><br>
    <li><h3>Editor: </h3>Aluno participante que além de visualizar e comentar, tem a possibilidade de editar o Projeto e suas características podendo gerir o Projeto junto com o Aluno dono.</li>
</ol><br>

<h1>Aluno dono do Projeto</h1><br>

<h2>Definir os Acessos</h2>
<p>O Aluno dono de um projeto poderá adicionar outros Alunos como participantes e podendo definir o tipo de acesso que cada Aluno participante terá no Projeto, se ele poderá editar ou somente visualizar o projeto, veja abaixo como é feito a definição de acesso ao projeto na plataforma:</p>

<ul>
    <li></li>
    <li></li>
    <li></li>
</ul><br>

<h2>Editar Projeto</h2>
<p>Como dono você tem a opção de editar o seu projeto, corrido caso tenha algo de errado ou atualizando com versões futuras do seu projeto, veja abaixo como editar os seus projetos na plataforma:</p>
<ul>
    <li>Primeiro você precisa acessar o seu perfil … --(explicação para acessar o perfil)--.</li><br>
    <li>Após acessar o seu perfil você deve ir na opção “meus projetos”, onde serão listados os seus projetos listados, e escolher o projeto que deseja editar.</li><br>
    <li>Quando você acessar o seu projeto você deve ir na opção editar …(explicar como acessar a opção editar).</li><br>
    <li>Você pode então atualizar os dados do seu projeto como título, descrição e imagem.</li>
</ul><br>

<h2>Deletar Projeto</h2>
<p>Caso você tenha criado o projeto ou tenha escolhido descontinuar o projeto, você como dono do projeto pode deletar os seus projeto, veja abaixo como deletar os seus projetos na plataforma:</p>
<ul>
    <li>Primeiro você precisa acessar o seu perfil … –(explicação para acessar o perfil)--.</li><br>
    <li>Após acessar o seu perfil você deve ir na opção “seus projetos”, onde serão listados os seus projetos listados, e escolher o projeto que deseja editar.</li><br>
    <li>Quando você acessar o seu projeto você deve ir na opção deletar projeto …–(explicar como acessar a opção editar)-- e então você terá seu projeto deletado.</li>
</ul><br>

<h1>Aluno Participante</h1>

<h2></h2>
@endsection
<!-- /Conteudo de Projeto -->

<!-- Súmario -->
@section('sumary')
<ul>
    <li>
        <a href="#">Projeto</a>
        <ol>
            <li><a href="#profile_A" id="user_perfilA">Criar Projeto</a></li>
            <li><a href="#profile_A" id="user_perfilA">Comentários</a></li>
            <li><a href="#profile_A" id="user_perfilA">Definições de Acesso</a></li>
        </ol>
    </li>

    <li>
        <a href="#user_A" id="user_usuarioA">Aluno Dono</a>
        <ol>
            <li><a href="#actions" id="user_acoes">Acessos</a></li>
            <li><a href="#actions" id="user_acoes">Editar</a></li>
            <li><a href="#actions" id="user_acoes">Remoção</a></li>
        </ol>
    </li>
    
    <li>
        <a href="#user_P" id="user_usuarioP">Aluno Participante</a>
        <ol>
            <li><a href="#profile_P" id="user_perfilP">Perfil</a></li>
            <li><a href="#challenger" id="user_desafio">Desafio</a></li>
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