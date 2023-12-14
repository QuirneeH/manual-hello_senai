<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Projeto')

<!-- Conteudo de Projeto -->
@section('content')
<h1 id="Project">Introdução</h1>
<p>O espaço para projetos você terá a oportunidade de reunir ideias, trabalhar em equipe e desenvolver projetos empolgantes de maneira colaborativa. Nossa plataforma foi projetada para fornecer um ambiente intuitivo e eficiente para transformar suas ideias em realidade.</p>

<div class="alert">
    <p>[IMPORTANTE] Para se executar os próximos passos é importante que esteja cadastrado na plataforma.<br><a href="{{ route('manual.users') }}/#register_A">Clique aqui</a> e entenda como se Cadastrar na plataforma.</p>
</div>

<h2 id="create">Criar Projeto</h2>
<p>Você como Aluno tem a opção de criar Projetos na plataforma, nele será mostrado como está o desenvolvimento do seu projeto, ou até como ficou o resultado final:</p>
<ul>
    <div class="tutorial">
        <div id="image">
            <li>Primeiro você precisa acessar a página de projetos, clicando no botão "Projetos".</li>
            <img src="/manual/images/home-projeto.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Após acessar a página de desafio, você deve clicar na opção "Criar Projeto", onde abrirá uma página para a criação do desafio.</li>
            <img src="/manual/images/projeto-criar-1.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Agora você pode preencher as informações como: nome, descrição, definir uma imagem, definir o status atual do projeto, como estamos criando um novo projeto é recomendado selecionar "Construindo", definir os participantes do projeto e colocar o link do repositório do projeto do github. Com os campos preenchidos clique em "Criar".</li>
            <img src="/manual/images/projeto-criar-2.png" alt="">
        </div><br>

        <div class="error">
            <p>[AJUDA] Os campos com "<b>*</b>" são campos obrigatórios. Se não preenchidos não será possivel criar um Projeto.</p>
        </div>
    </div>

    <div class="alert">
        <p>[IMPORTANTE] Para serem postados, os projetos têm de ter obrigatoriamente um repositorio no <a href="https://github.com" target="_blank">GitHub</a>.</p>
    </div>
</ul><br>

<h2 id="comment">Comentário</h2>
<p>Todos os usuários tanto Alunos quanto professores mesmos não participando do projeto podem fazer comentários em projetos. Interação é bem importante para o aprendizado.</p>
<ul>
    <div class="tutorial">
        <div id="image">
            <li>Antes de tudo, primeiro você precisa acessar o perfil do criador do projeto.</li>
            <img src="/manual/images/home-usuario-1.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Após acessar o perfil do Usuário Dono você deve ir na opção "Projetos", onde serão listados os seus projetos listados, e selecione o projeto que deseja fazer um comentário.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Clique na caixa de texto e digite seu comentário. após terminar clique em "".</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="error"><b>[AJUDA] Problemas ao Comentar em Projetos: </b>Se encontrar problemas ao deixar comentários, certifique-se de estar logado corretamente, verifique se está respeitando as diretrizes da comunidade. Se o problema persistir, entre em contato com o suporte para esclarecimentos adicionais.</div>
</ul><br>

<h2 id="definition_access">Tipos de Acesso dos Participantes</h2>
<p>O Aluno dono de um projeto pode definir participantes que estão fazendo parte da construção do projeto, caso um Aluno dono defina outro Aluno como participante do seu projeto, ele poderá definir 2 tipos de acesso do projeto o Aluno participante:</p>

<ol>
    <li><b>Visualizador: </b>Aluno participante que poderá apenas visualizar a página e fazer comentários no Projeto.</li><br>
    <li><b>Editor: </b>Aluno participante que além de visualizar e comentar, tem a possibilidade de editar o Projeto e suas características podendo gerir o Projeto junto com o Aluno dono.</li>
</ol><br>

<h2 id="report">Denunciar Projeto</h2>
<p>Caso você encontre um Projeto que não respeita as diretrizes da plataforma você poderá fazer uma denúncia, que será enviado para os administradores para ser avaliada:</p>
<ul>
    <div class="tutorial">
        <div id="image">
            <li>Estando na Pagina de "Projetos" clique na opções no canto superior da caixa do projeto e clique em "Denunciar".</li>
            <img src="/manual/images/projeto-reportar.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Transcreva o motivo que te levou denuncia-lo e clique no botão "Denunciar" para enviar sua denuncia para os nosso administradores.</li>
            <img src="" alt="">
        </div>
    </div>
</ul>

<h1 id="owner">Aluno dono do Projeto</h1><br>

<h2 id="define_access">Definir os Acessos</h2>
<p>O Aluno dono de um projeto poderá adicionar outros Alunos como participantes e podendo definir o tipo de acesso que cada Aluno participante terá no Projeto, se ele poderá editar ou somente visualizar o projeto, Quando um usuário cria um projeto todos os participantes são definidos como leitores mas o  dono do projeto, quando editar o projeto, pode definir os participantes como editor caso ele queria, veja abaixo como é feito a definição de acesso ao projeto na plataforma:</p>

<ul>
    <div class="tutorial">
        <div id="image">
            <li>Antes de tudo você precisa acessar a funcionalidade de editar o projeto, acesse passo a passo aqui.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Após acessar a funcionalidade de editar o projeto, vá na opção participantes, lá serão listados todos os participantes.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Escolha o participante que deseja e mude o tipo de acesso que ele terá no projeto.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>
</ul><br>

<h2 id="edit_D">Editar Projeto</h2>
<p>Como dono você tem a opção de editar o seu projeto, corrido caso tenha algo de errado ou atualizando com versões futuras do seu projeto, veja abaixo como editar os seus projetos na plataforma:</p>
<ul>
    <div class="tutorial">
        <div id="image">
            <li>Primeiro você precisa acessar o seu perfil.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Após acessar o seu perfil você deve ir na opção "projetos", onde serão listados os seus projetos, e selecione o projeto que deseja editar.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Quando você acessar o seu projeto você deve ir na opção editar.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Você pode então atualizar os dados do seu projeto como título, descrição e imagem.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>
</ul><br>

<h2 id="delete">Deletar Projeto</h2>
<p>Caso você tenha criado o projeto ou tenha escolhido descontinuar o projeto, você como dono do projeto pode deletar os seus projeto, veja abaixo como deletar os seus projetos na plataforma:</p>
<ul>

    <div class="tutorial">
        <div id="image">
            <li>Primeiro você precisa acessar o seu perfil como feito anteriomente.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Após acessar o seu perfil você deve ir na opção "Projetos", onde serão listados os seus projetos.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Quando você acessar o seu projeto você deve ir na opção deletar projeto e então você terá seu projeto deletado.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>
</ul>

<h1>Aluno Participante</h1>
<p>Os Alunos donos e <span>participantes com acesso de Editor de um Projeto</span>, como dito anteriormente, podem efetuar alterações do Projeto que estão compartilhando.</p>

<h2>Editar Projeto</h2>
<p><a href="#edit_D">Do mesmo jeito que o Aluno dono</a>↑.</p>


@endsection
<!-- /Conteudo de Projeto -->

<!-- Súmario -->
@section('sumary')
<ul>
    <li>
        <a href="#Project">Projeto</a>
        <ol>
            <li><a href="#create">Criar Projeto</a></li>
            <li><a href="#comment">Comentar Projeto</a></li>
            <li><a href="#definition_access">Tipos de Acesso</a></li>
            <li><a href="#report">Denuncia</a></li>
        </ol>
    </li>

    <li>
        <a href="#owner">Dono de Projeto</a>
        <ol>
            <li><a href="#define_access">Acessos</a></li>
            <li><a href="#edit_D">Editar</a></li>
            <li><a href="#delete">Remoção</a></li>
        </ol>
    </li>

    <li>
        <a href="#participant">Participante</a>
        <ol>
            <li><a href="#edit_D">Editar</a></li>
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