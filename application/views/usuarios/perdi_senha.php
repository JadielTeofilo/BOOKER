<!DOCTYPE html>
<?php
$this->load->helper('form');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Wheatley Corporation</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="public/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/public/css/login.css'?>"/>

</head>
<body>
    <img id="logo" src="<?php echo base_url().'/public/imagens/BOOKERslivros.png'?>"/>
    <div class="formu">
    <span>Digite seu nome de usuario e um email lhe será enviado com a sua senha</span><br>
    <?php echo form_open('index.php/usuario/senha_perdida')?>
       <input id="login" type="text" placeholder="Usuário" name="login"></input> <br>
       <input id="Entrar" value="enviar" type="submit"></input> <br>
    <?php echo form_close() ?><br>
    </div>
</body>
<footer>
		©2014 Sistema de Biblioteca BOOKERs.
</footer>
