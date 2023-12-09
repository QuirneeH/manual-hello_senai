<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Projeto')

<!-- Conteudo de Projeto -->
@section('content')
<h1 id="Project">Introdução</h1>
<p>O espaço para projetos você terá a oportunidade de reunir ideias, trabalhar em equipe e desenvolver projetos empolgantes de maneira colaborativa. Nossa plataforma foi projetada para fornecer um ambiente intuitivo e eficiente para transformar suas ideias em realidade.</p>

<h2 id="create">Criar Projeto</h2>
<p>Você como Aluno tem a opção de criar Projetos na plataforma, nele será mostrado como está o desenvolvimento do seu projeto, ou até como ficou o resultado final:</p>
<ul>
    <li>Primeiro você precisa acessar a página de projetos, clicando no botão “meus projetos”.</li><br>
    <li>Após acessar a página de desafio, você deve clicar na opção “criar projetos”, onde abrirá uma página para a criação do desafio.
    </li><br>
    <li>Agora você pode preencher as informações como: título, descrição, definir uma imagem para o seu projeto, definir os participantes do projeto e colocar o link do repositório do projeto do github<br><br>
    <span>ATENÇÃO: Para serem postados, os projetos têm de ter obrigatoriamente um repositorio no github.</span></li>
</ul><br>

<h2 id="comment">Comentário</h2>
<p>Todos os usuários tanto Alunos quanto professores mesmos não participando do projeto podem fazer comentários em projetos. Interação é bem importante para o aprendizado.</p>
<ul>
    <li>Antes de tudo, primeiro você precisa acessar o perfil do criador do projeto … –(explicação para acessar o perfil)--.</li><br>
    <li>Após acessar o perfil dele você deve ir na opção “meus projetos”, onde serão listados os seus projetos listados, e escolher o projeto que deseja fazer um comentário.</li><br>
    <li>Clique na caixa de texto e digite seu comentário.</li><br>
    <li>Terminado sua escrita clique no botão –(botão de comentar)--.</li>
</ul><br>

<h2 id="definition_access">Tipos de Acesso dos Participantes</h2>
<p>O Aluno dono de um projeto pode definir participantes que estão fazendo parte da construção do projeto, caso um Aluno dono defina outro Aluno como participante do seu projeto, ele poderá definir 2 tipos de acesso do projeto o Aluno participante:</p><br>
<ol>
    <li><b c> cVisualizador: </b>Aluno participante que poderá apenas visualizar a página e fazer comentários no Projeto.</li><br>
    <li><b>Editor: </b>Aluno participante que além de visualizar e comentar, tem a possibilidade de editar o Projeto e suas características podendo gerir o Projeto junto com o Aluno dono.</li>
</ol><br>

<h1 id="owner">Aluno dono do Projeto</h1><br>

<h2 id="define_access">Definir os Acessos</h2>
<p>O Aluno dono de um projeto poderá adicionar outros Alunos como participantes e podendo definir o tipo de acesso que cada Aluno participante terá no Projeto, se ele poderá editar ou somente visualizar o projeto, Quando um usuário cria um projeto todos os participantes são definidos como leitores mas o  dono do projeto, quando editar o projeto, pode definir os participantes como editor caso ele queria, veja abaixo como é feito a definição de acesso ao projeto na plataforma:</p>

<ul>
    <li>Antes de tudo você precisa acessar a funcionalidade de editar o projeto, acesse passo a passo aqui.</li>
    <li>Após acessar a funcionalidade de editar o projeto, vá na opção participantes, lá serão listados todos os participantes.</li>
    <li>Escolha o participante que deseja e mude o tipo de acesso que ele terá no projeto.</li>
</ul><br>

<h2 id="edit">Editar Projeto</h2>
<p>Como dono você tem a opção de editar o seu projeto, corrido caso tenha algo de errado ou atualizando com versões futuras do seu projeto, veja abaixo como editar os seus projetos na plataforma:</p>
<ul>
    <li>Primeiro você precisa acessar o seu perfil … --(explicação para acessar o perfil)--.</li><br>
    <li>Após acessar o seu perfil você deve ir na opção “meus projetos”, onde serão listados os seus projetos listados, e escolher o projeto que deseja editar.</li><br>
    <li>Quando você acessar o seu projeto você deve ir na opção editar …(explicar como acessar a opção editar).</li><br>
    <li>Você pode então atualizar os dados do seu projeto como título, descrição e imagem.</li>
</ul><br>

<h2 id="delete">Deletar Projeto</h2>
<p>Caso você tenha criado o projeto ou tenha escolhido descontinuar o projeto, você como dono do projeto pode deletar os seus projeto, veja abaixo como deletar os seus projetos na plataforma:</p>
<ul>
    <li>Primeiro você precisa acessar o seu perfil … –(explicação para acessar o perfil)--.</li><br>
    <li>Após acessar o seu perfil você deve ir na opção “seus projetos”, onde serão listados os seus projetos listados, e escolher o projeto que deseja editar.</li><br>
    <li>Quando você acessar o seu projeto você deve ir na opção deletar projeto …–(explicar como acessar a opção editar)-- e então você terá seu projeto deletado.</li>
</ul><br>
@endsection
<!-- /Conteudo de Projeto -->

<!-- Súmario -->
@section('sumary')
<ul>
    <li>
        <a href="#Project">Projeto</a>
        <ol>
            <li><a href="#create" id="user_perfilA">Criar Projeto</a></li>
            <li><a href="#comment" id="user_perfilA">Comentar Projeto</a></li>
            <li><a href="#definition_access" id="user_perfilA">Tipos de Acesso</a></li>
        </ol>
    </li>

    <li>
        <a href="#owner" id="user_usuarioA">Dono de Projeto</a>
        <ol>
            <li><a href="#define_access" id="user_acoes">Acessos</a></li>
            <li><a href="#edit" id="user_acoes">Editar</a></li>
            <li><a href="#delete" id="user_acoes">Remoção</a></li>
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