<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Convite')

<!-- Conteudo de Convite -->
@section('content')
<h1>Introdução</h1>
<p>O espaço para Convites dos Projetos é um espaço na plataforma para compartilhar seus Projetos com outros alunos com intuito de formar uma equipe de Desenvolvimento. Vinculando outros alunos ao seu Projetos e determinando cargos como a liderança. Nesse espaço, seja para dividir seu projeto com outros alunos, ou para participar daquela ideia que você achou interessante, troquem mensagens por email e monte aquela equipe de Desenvolvedores.</p>

<h1>Como Dono de um Projeto</h1>
<h2 id="create">Criar um Convite</h2>
<p>No seu convite você pode descrever brevemente sobre seu Projeto e quais habilidades de programação está buscando dos outros alunos para sua equipe.</p>
<ul>
<div class="tutorial">
        <div id="image">
            <li>Na página inicial clique na opção "Convites" será redirecionado para a página de convites.</li>
            <img src="/manual/images/home-convite.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Na página Convites clique em "Criar Convite".</li>
            <img src="/manual/images/convite-1.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Na página de criação adicione um título ao Convite e uma descrição sobre o seu projeto com no mínimo 3 caracteres. Com todos os campos preenchidos clique no botão "Criar" e seu convite será postado.</li>
            <img src="/manual/images/convite-2.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <img src="/manual/images/convite-3.png" alt="">
        </div>
    </div>
</ul>
<div class="alert">
    <p>[IMPORTANTE] Lembre de deixar seu email de contato no convite para os alunos participarem.</p>
</div>

<h2 id="edit">Editar Convite</h2>
<p>Se possuir um Convite postado na página de Convite, porem com alguma errata, você poderá fazer alterações no seu Convite editando-o para melhor coerência ou corrigir o título ou a descrição.</p>
<ul>
    <div class="tutorial">
        <div id="image">
            <li>No seu perfil, na aba de "Convites" selecione o botão de editar.</li>
            <img src="/manual/images/convite-editar-1.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Ao clicar aparecerá o modal de Edição e escreva suas alterações. Com suas alterações feitas clique em "Atualizar".</li>
            <img src="/manual/images/convite-editar-2.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Convite editado.</li>
            <img src="/manual/images/convite-editar-3.png" alt="">
        </div>
    </div>
</ul>

<h2 id="requests">Solicitações</h2>
<p>Com seu Convite postado o Aluno Dono quando um outro Aluno querer participar e pedir acesso no Convite, o Aluno Dono Recebá um Email via <a href="https://mail.google.com" target="_blank">Gmail</a> semelhante a este:</p>
    <div class="tutorial">
        <div id="image">
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

<p>Ao mesmo tempo na página de <a href="#">Notificações</a></p>
    <div class="tutorial">
        <div id="image">
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

<h1 id="participate">Participar</h1>
<p>Participe de uma equipe dividindo experiências e ideias com outros alunos. Entre em contato com os alunos responsáveis pelo Projeto por email descrevendo qual sua intenção no projeto.</p>

<ul>
    <div class="tutorial">
        <div id="image">
            <li>Na página inicial clique na opção "Convites" será redirecionado para a página de convites.</li>
            <img src="/manual/images/home-convite.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Ao acessar a página de Convites selecione o convite específico que deseja participar no botão "Acessar".</li>
            <img src="/manual/images/convite-parti-1.png" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Deixe sua mensagem para do porque você deseja participar e envie clicando no botão "Solicitar".</li>
            <img src="/manual/images/convite-parti-2.png" alt="">
        </div>
    </div>
</ul>
<p>Pronto, agora resta esperar a resposta dos responsáveis.</p>
@endsection
<!-- /Conteudo de Convite -->

<!-- Súmario -->
@section('sumary')
<ul>
    <li>
        Aluno Dono
        <ol>
            <li><a href="#create">Criar Convite</a></li>
            <li><a href="#edit">Editar Convite</a></li>
            <li><a href="#requests">Solicitações</a></li>
        </ol>
    </li>

    <li>
        <a href="#participate">Participar</a>
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