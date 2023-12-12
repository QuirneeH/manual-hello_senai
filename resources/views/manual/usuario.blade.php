<!-- Layout pertencente (manual.blade.php) -->
@extends('layouts.manual.manual')

<!-- Titúlo da Página -->
@section('page', 'Usuário')

<!-- Conteudo de Usuario -->
@section('content')
<h1>Introdução</h1>
<p>Para ter acesso à plataforma é primeiramente preciso ser um aluno ou um professor do SENAI da matéria de Desenvolvimento de Sistemas, sendo um aluno vamos ao cadastro.</p>

<ul>
    <span>Para fazer o cadastro na plataforma, primeiro você precisa estar matriculado no SENAI.</span><br><br>
    <div class="tutorial">
        <div id="image">
            <li>Na primeira tela, escolha aluno, caso você seja um aluno da instituição ou professor caso você seja um professor da instituição.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>

    <div class="tutorial">
        <div id="image">
            <li>Clique na opção de se registrar, para fazer o cadastro na plataforma</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>
    
    <div class="tutorial">
        <div id="image">
            <li>Insira suas informações como nome, email disponibilizado pelo Senai e criar uma senha.</li>
            <img src="https://t4.ftcdn.net/jpg/02/00/68/69/360_F_200686969_GJ7zbz2qaNIE4dyHSbZkQXvNPzRuwlr3.jpg" alt="">
        </div>
    </div>
    
</ul><br>

<h1 id="user_A">Usuário Aluno</h1>
<p>Com seu perfil criado seu acesso a plataforma agora foi aceito. Bem vindo.</p>
<p>Ao abrir a plataforma pela primeira vez --(Nome da tela após o login / cadastro)-- você consegue acessar seu perfil clicando em --(“...”)-- será redirecionamento para a sua tela de perfil.</p><br>

<ol>
    <li><h2 id="profile_A">Perfil</h2></li>
    <ol>
        <p><h3>Visualização:</h3> Visualize seu perfil com informações preenchidas anteriormente. --Campos do passo a passo--
        Aqui ficam as informações sobre você aluno onde outros usuários podem acessar e visualizar seus projetos, lhe conhecer melhor e ter acesso mais direcionado a sua pessoa.</p><br>

        <p><h3>Editar Perfil:</h3> Atualize suas informações de perfil, incluindo nome, foto e outras configurações.</p><br>
    </ol>
    
    <li><h2 id="actions">Acões</h2></li>
    <ol>
        <p><h3>Criar um Projeto:</h3> Com a permissão do acesso à plataforma o aluno pode criar seus projetos e postar na comunidade. Inicie a página de apresentação de um projeto de desenvolvimento de sistemas e compartilhe sua ideia.</p>

        <p><h3>Editar Projeto:</h3> Faltou algum detalhe? Faça ajustes na página de apresentação do seu projeto, deixando o mesmo melhor apresentável para os visitantes da página do projeto.</p>

        <p><h3>Comentar nos Projetos:</h3> Interaja com outros alunos deixando comentários em projetos da comunidade, você pode ter pensando em algum detalhe que outras pessoas não viram. Lembre-se, respeite tanto o projeto quanto os alunos da página, exceder o limite será sujeito a punição.</p>

        <p><h3>Criar um Convite:</h3> Crie convites para seus projetos para montar equipes da comunidade de alunos colaborarem nos mesmos. Dê uma breve descrição sobre o projeto e o mesmo anexado para que outros alunos possam visualizar com mais detalhes, especifique quais habilidades de programação a sua equipe está necessitando para que alunos com essas habilidades entrem em contato com você deixando seu e-mail de contato.</p>

        <p><h3>Vincular Convites:</h3> Conecte seus projetos a convites e deixe que outros alunos vejam e se interessem a participar do seu Projeto. Alunos interessados em participar enviaram o e-mail pedindo a participação dele no seu projeto, verifique o seu e-mail para a montar a sua equipe.</p>

        <p><h3>Pedir Participação em Outros Projetos:</h3> Envie solicitações para participar de projetos de outros alunos enviando um e-mail para os responsáveis pelo projeto em questão e dividam experiências demonstrando suas habilidades de programador.</p>
    </ol>
</ol>

<h1 id="user_P">Usuário Professor</h1><br>
<ol>
    <li><h2 id="profile_P">Perfil</h2></li>
    <ol>
        <p><h3>Visualização:</h3> Visualize seu perfil e informações pessoais. Aqui pode ser visualizado suas informações pessoais e profissionais por seus alunos e outros professores sobre você.</p>
        
        <p><h3>Editar Perfil:</h3> Atualize suas informações de perfil, incluindo --Campos do passo a passo--. deixe-o melhor apresentável aos visitantes ou deixe detalhes sobre você aqui para que lhe conheçam.</p>
    </ol>
    <li><h2 id="challenger">Desafio</h2></li>
    <p>Os professores têm um papel importante no aprendizado do aluno, além de passar conhecimento e dividir experiências de trabalho, estimula com atividades em sala de aula ou para casa, tendo isso em mente, na plataforma os professores podem propor desafios aos alunos do curso de desenvolvimento de sistemas, podendo ver as proposta dos alunos, ter acesso ao diretório.</p>
    
    <ol>
        <p><h3>Criar um Desafio:</h3> Abra um desafio para os alunos de Desenvolvimento de Sistemas com problemas existentes, ideias mirabolantes ou para testar os conhecimentos dos alunos do curso.</p><br>
        
        <p><h3>Visualizar Desafio:</h3> Com o desafio criado, ele pode ser visualizado tanto pelos professores quanto pelos alunos, porém, as postagens são feitas apenas pelos alunos.</p><br>

        <p><h3>Editar Desafio:</h3> Faltou alguma informação importante ou deseja mudar a proposta? Edite os campos para maior clareza das informações do desafio para os seus alunos.</p><br>

        <p><h3>Visualizar Projetos:</h3> Os Projetos postados pelos alunos podem ser visualizados com mais detalhes ao clicar no mesmo, sendo redirecionado para uma página do Projeto em específico, onde possam ler e comentar novas ideias.</p>
    </ol>
</ol>
@endsection
<!-- /Conteudo de Usuario -->

<!-- Súmario -->
@section('sumary')
<ul>
    <li>
        <a href="#user_A" id="user_usuarioA">Usuário Aluno</a>
        <ol>
            <li><a href="#profile_A" id="user_perfilA">Perfil</a></li>
            <li><a href="#actions" id="user_acoes">Acões</a></li>
        </ol>
    </li>
    
    <li>
        <a href="#user_P" id="user_usuarioP">Usuário Professor</a>
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