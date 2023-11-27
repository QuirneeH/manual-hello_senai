@extends('layouts.manual.manual')

@section('page', 'Usuário')

@section('content')
<h2>Introdução</h2>
<p>Para ter acesso à plataforma é primeiramente preciso ser um aluno ou um professor do SENAI da matéria de Desenvolvimento de Sistemas, sendo um aluno vamos ao cadastro.</p><br>

<ol>
    <li>Passo 1</li>
    <li>Passo 2</li>
    <li>Passo 3</li>
</ol><br>

<h2>Usuário Aluno</h2>
<p>Com seu perfil criado seu acesso a plataforma agora foi aceito. Bem vindo.</p>
<p>Ao abrir a plataforma pela primeira vez --(Nome da tela após o login / cadastro)-- você consegue acessar seu perfil clicando em --(“...”)-- será redirecionamento para a sua tela de perfil.</p><br>

<ol>
    <li><h3>Perfil</h3></li>
    <ol>
        <p><h4>Visualização:</h4> Visualize seu perfil com informações preenchidas anteriormente. --Campos do passo a passo--
        Aqui ficam as informações sobre você aluno onde outros usuários podem acessar e visualizar seus projetos, lhe conhecer melhor e ter acesso mais direcionado a sua pessoa.</p><br>

        <p><h4>Editar Perfil:</h4> Atualize suas informações de perfil, incluindo nome, foto e outras configurações.</p><br>
    </ol>
    <li><h3>Usabilidades</h3></li>
    <ol>
        <p><h4>Criar um Projeto:</h4> Com a permissão do acesso à plataforma o aluno pode criar seus projetos e postar na comunidade. Inicie a página de apresentação de um projeto de desenvolvimento de sistemas e compartilhe sua ideia.</p><br>

        <p><h4>Editar Projeto:</h4> Faltou algum detalhe? Faça ajustes na página de apresentação do seu projeto, deixando o mesmo melhor apresentável para os visitantes da página do projeto.</p><br>

        <p><h4>Comentar nos Projetos:</h4> Interaja com outros alunos deixando comentários em projetos da comunidade, você pode ter pensando em algum detalhe que outras pessoas não viram. Lembre-se, respeite tanto o projeto quanto os alunos da página, exceder o limite será sujeito a punição.</p><br>

        <p><h4>Criar um Convite:</h4> Crie convites para seus projetos para montar equipes da comunidade de alunos colaborarem nos mesmos. Dê uma breve descrição sobre o projeto e o mesmo anexado para que outros alunos possam visualizar com mais detalhes, especifique quais habilidades de programação a sua equipe está necessitando para que alunos com essas habilidades entrem em contato com você deixando seu e-mail de contato.</p><br>

        <p><h4>Vincular Convites:</h4> Conecte seus projetos a convites e deixe que outros alunos vejam e se interessem a participar do seu Projeto. Alunos interessados em participar enviaram o e-mail pedindo a participação dele no seu projeto, verifique o seu e-mail para a montar a sua equipe.</p><br>


        <p><h4>Pedir Participação em Outros Projetos:</h4> Envie solicitações para participar de projetos de outros alunos enviando um e-mail para os responsáveis pelo projeto em questão e dividam experiências demonstrando suas habilidades de programador.</p><br>
    </ol>
</ol>

<h2>Usuário Professor</h2><br>
<ol>
    <li><h3>Perfil</h3></li>
    <ol>
        <p><h4>Visualização:</h4> Visualize seu perfil e informações pessoais. Aqui pode ser visualizado suas informações pessoais e profissionais por seus alunos e outros professores sobre você.</p><br>

        <p><h4>Editar Perfil:</h4> Atualize suas informações de perfil, incluindo --Campos do passo a passo--. deixe-o melhor apresentável aos visitantes ou deixe detalhes sobre você aqui para que lhe conheçam.</p><br>
    </ol>
    <li><h3>Desafio</h3></li>
    <p>Os professores têm um papel importante no aprendizado do aluno, além de passar conhecimento e dividir experiências de trabalho, estimula com atividades em sala de aula ou para casa, tendo isso em mente, na plataforma os professores podem propor desafios aos alunos do curso de desenvolvimento de sistemas, podendo ver as proposta dos alunos, ter acesso ao diretório.</p><br>
    <ol>
        <p><h4>Criar um Desafio:</h4> Abra um desafio para os alunos de Desenvolvimento de Sistemas com problemas existentes, ideias mirabolantes ou para testar os conhecimentos dos alunos do curso.</p><br>

        <p><h4>Visualizar Desafio:</h4> Com o desafio criado, ele pode ser visualizado tanto pelos professores quanto pelos alunos, porém, as postagens são feitas apenas pelos alunos.</p><br>

        <p><h4>Editar Desafio:</h4> Faltou alguma informação importante ou deseja mudar a proposta? Edite os campos para maior clareza das informações do desafio para os seus alunos.</p><br>

        <p><h4>Visualizar Projetos:</h4> Os Projetos postados pelos alunos podem ser visualizados com mais detalhes ao clicar no mesmo, sendo redirecionado para uma página do Projeto em específico, onde possam ler e comentar novas ideias.</p>
    </ol>
</ol>
@endsection

@section('sumary')
<ul>
    <li>
        <a href="#">Usuário Aluno</a>
        <ol>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Usabilidades</a></li>
        </ol>
    </li>
    
    <li>
        <a href="#">Usuário Professor</a>
        <ol>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Desafio</a></li>
        </ol>
    </li>
</ul>
@endsection

@section('footer_services')
<ul>
    <a href="#"><button id="nav_button"></button></a>
    <a href="#"><button id="nav_button"></button></a>
    <a href="#"><button id="nav_button"></button></a>
</ul>
@endsection

@section('footer_FAQ')
<ul>
    <a href="#"><button id="nav_button">FAQ</button></a>
    <a href="#"><button id="nav_button">GitHub</button></a>
</ul>
@endsection