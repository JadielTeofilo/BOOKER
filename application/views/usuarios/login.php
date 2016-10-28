<?php echo $this->load->view('_inc/header') ?>
<body class="valign-wrapper" >
    <div id="logingeral" class="valign" >
        <img id="logo" src="<?php echo base_url().'/public/imagens/logo.jpg'?>"/>
        <?php $attributes = array('class' => 'center-align');?>
        <?php echo form_open('index.php/usuario/logar', $attributes)?>
            <div class="row" >
                <div class="center-align" class="input-field col s3">
                    <input required id="login" type="text" placeholder="Usuário" name="login" autofocus>
                    <label for="email">Nome Usuário</label>
                </div>
            </div>
            <div class="row">
                <div class="center-align" class="input-field s3">
                    <input required id ="password" type="password" placeholder="Senha" name="senha" autofocus>
                    <label for="password">Password</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="enviar">Submit
                <i class="material-icons right">send</i>
            </button>
        <?php echo form_close() ?><br>
        <div class="row">
            <a href="<?php echo base_url().'index.php/usuario/senha_perdida1'?>">Esqueci minha senha</a>
        </div>
        <div class="row">
            ©2015 Sistema BOOKER.        
        </div>    
    </div>
    
    
</body>
<footer>
		
        <?php echo $this->load->view('_inc/footer') ?>
</footer>
</html>

