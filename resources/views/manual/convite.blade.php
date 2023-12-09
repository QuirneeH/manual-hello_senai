<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Convite')

<!-- Conteudo de Convite -->
@section('content')
<h1>Introdução</h1>
<p>O espaço para Convites dos Projetos é um espaço na plataforma para compartilhar seus Projetos com outros alunos com intuito de formar uma equipe de Desenvolvimento. Vinculando outros alunos ao seu Projetos e determinando cargos como a liderança. Nesse espaço, seja para dividir seu projeto com outros alunos, ou para participar daquela ideia que você achou interessante, troquem mensagens por email e monte aquela equipe de Desenvolvedores.</p><br>

<h1>Como Dono de um Projeto</h1>
<h2 id="create">Criar um Convite</h2>
<p>No seu convite você pode descrever brevemente sobre seu Projeto e quais habilidades de programação está buscando dos outros alunos para sua equipe.</p><br>
<ul>
    <li>Na página inicial clique na opção –(nome da opção)-- será redirecionado para a página de convites.</li><br>
    <li>Na página Convites clique em –(nome da opção)-- para criar seu convite para ser redirecionado a página de criação.</li><br>
    <li>Na página de criação adicione um título ao Convite no campo de título e uma descrição sobre o seu projeto com no mínimo 3 caracteres.</li><br>
    <li>Com todos os campos preenchidos clique no botão –(nome da opção)-- e seu convite será postado.</li>
</ul><br>
<p>Lembre de deixar seu email de contato no convite para os alunos participarem.</p><br>

<h2 id="edit">Editar Convite</h2>
<p>Se possuir um Convite postado na página de Convite você poderá fazer alterações no seu Convite editando-o para melhor coerência ou corrigir o título ou a descrição.</p><br>
<ul>
    <li>Na página de Convites selecione o seu convite e clique em editar convite.</li><br>
    <li>Na página de edição escreva suas alterações do titulo ou descrição anterior</li><br>
    <li>Com as modificações feitas clique em –(nome da opção)--.</li><br>
    <li>Pronto, suas alterações foram salvas.</li><br>
</ul>

<h1 id="participate">Participar</h1>
<p>Participe de uma equipe dividindo experiências e ideias com outros alunos. Entre em contato com os alunos responsáveis pelo Projeto por email descrevendo qual sua intenção no projeto.</p><br>

<ul>
    <li>Para participar primeiro você deve escolher o convite que deseja, alguns deles aparecerão na página inicial, mas caso não tenha nenhum de seu interesse você pode acessar a página de convites clicando no botão convites ++imagem++ , onde serão listados todos os convites enviados.</li><br>
    <li>Ao acessar o convite desejado você pode ler a descrição e ver quem o fez, você terá a opção de aceitar o convite, e caso queira você pode enviar uma mensagem para quem criou</li><br>
    <li>Quando você aceita um convite, um email será enviado para quem o criou, você deverá aguardar o mesmo aceitar ou não a sua entrada no projeto.</li>
</ul><br>
<p>Pronto, agora resta esperar a resposta dos responsáveis.</p>
@endsection
<!-- /Conteudo de Convite -->

<!-- Súmario -->
@section('sumary')
<ul>
    <li>
        Aluno Dono
        <ol>
            <li><a href="#create" id="user_perfilA">Criar Convite</a></li>
            <li><a href="#edit" id="user_acoes">Editar Convite</a></li>
            <li><a href="#participate">Participar</a></li>
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