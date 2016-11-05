<!DOCTYPE html>
<?php $this->load->helper('url');?>

<html>
<head>
    <meta charset="utf-8">
    <title>BOOKERS</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/meuperfil.css"/>
    <link href="<?php echo base_url(); ?>public/css/materialize.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/public/css/menuadm.css'?>"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/pdfobject.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/pdfobject.js"></script>
    <script src="/public/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="/public/dist/sweetalert.css">
</head>
<body>

<!-- Dropdown para gerenciamento usuarios -->
<ul id="dropdownUsuario" class="dropdown-content ">
    <li>
        <a href="<?php echo base_url().'index.php/admin/listar'; ?>">
            <span class="black-text">Visualizar Membros</span>
        </a> 
    </li>
    <li class="divider"></li>
    <li class="black-text">
        <a href="<?php echo base_url().'index.php/admin/cadastro' ?>">
            <span class="black-text">Cadastrar Membro</span>
        </a>
    </li>
</ul>

<!-- Dropdown Para livros -->
<ul id="dropdownLivros" class="dropdown-content ">
    <li>
        <a href="<?php echo base_url().'index.php/livros/visualizar'?>">
            <span class="black-text">Visualizar livros</span>
        </a> 
    </li>
    <li class="divider"></li>
    <li class="black-text">
        <a href="<?php echo base_url().'index.php/livros/visualizar_livros_retirados' ?>">
            <span class="black-text">Livros retirados</span>
        </a>
    </li>
    <li class="divider"></li>
    <li class="black-text">
        <a href="<?php echo base_url().'index.php/livros/cadastro'?>">
            <span class="black-text">Cadastrar um livro</span>
        </a>
    </li>
</ul>

<!--Menu Superior-->
<div class = "navbar-fixed">
    <nav class="brown lighten-2">
        <div class="nav-wrapper">
            <a href="<?php echo base_url().'index.php/usuario/home_high_lv'; ?>" class="center brand-logo">BOOKERS</a>
            <ul class="left hide-on-med-and-down">
                <li>
                    <a href="<?php echo base_url().'index.php/usuario/imprimir_dados_meus'; ?>">Perfil</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/admin/visualizar_sugestoes'; ?>">Sugestões</a>
                </li>           
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdownUsuario">
                        <span>Gerenciar Membros</span>
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdownLivros">
                        <span>Livros</span>
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/usuario/deslogar'; ?>">Sair</a>
                </li> 
            </ul>
        </div>
    </nav>
</div>
</body>
