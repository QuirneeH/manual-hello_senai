<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Desafio')

<!-- Conteudo de Desafio -->
@section('content')
<h2>Introdução</h2>
<p> Um incentivo ao estudo é importante para o aprendizado do aluno, isso que a nossa plataforma acredita e proporciona um espaço para desenvolvimento pessoal e profissional. Pensando nisso, adicionamos um incentivo mais “desafiador” para nossos alunos.
    Desafios são problemas elaborados pelos seus professores para os alunos de Desenvolvimento de Sistemas implementarem uma solução para o mesmo problema postando essas ideias na página do Desafio para que os professores possam avaliá-las e determinar a melhor ou as melhores soluções para o problema.
</p>
<br>
<h3>Criação de um Desafio (Professor)</h3>
<p>Na criação do Desafio é importante que a descrição sobre a proposta esteja bem elaborada  para facilitar a interação dos alunos, pois, algumasmaneira de dizer nomes na área da programação podem não ser do entendimento de alguns alunos iniciantes.
</p>
<br>
<p> Pensando nas informações vamos a criação. </p>
<br>
<ul> 
    <li>Primeiro você precisa acessar a página de desafios, clicando no botão “desafios” </li><br>
    <li>Após acessar a página de desafio, você deve clicar no opção “criar desafio”, onde abrirá um popup para a criação do desafio</li><br>
    <li>Agora você pode preencher as informações como: título, descrição e definir uma imagem para o seu desafio.</li>
</ul>
<br>
<h3>Criando um Projeto para Desafio (Aluno)</h3>
<p>Estando na página de Desafios poderá visualizar uma lista com todos os desafios disponíveis, acessando um Desafio em específico o aluno poderá aceitar, permitindo que possa criar um projeto para atender o desafio proposto para que os professores e os alunos possam visualizar, porém, apenas professores poderão avaliá-lo.</p><br>
<ul>
    <li>Abra a pagina de Desafios e clique em um Desafio em específico que deseja participar</li>
    <li>Clique na opção –(nome da opção)-- para participar do desafio </li>
    <li>Estando escrito no Desafio o aluno poderá criar um Projeto para o Desafio semelhante a criação de um Projeto</li>
    <li>–(explicação de criação de um projeto)--</li>
</ul>
EM PRODUÇÃO
@endsection

<!-- /Conteudo de Desafio -->

<!-- Súmario -->
@section('sumary')

@endsection

<!-- Redirecionamento para outras Funcionalidades -->
@section('footer_services')
<ul>
    <a href="#"><button id="nav_button"></button></a>
    <a href="#"><button id="nav_button"></button></a>
    <a href="#"><button id="nav_button"></button></a>
</ul>
@endsection