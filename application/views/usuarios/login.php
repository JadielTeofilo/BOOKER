<?php echo $this->load->view('_inc/header') ?>


<body>
   <div class = "navbar-fixed">
    <nav class="grey">
        <div class="nav-wrapper">
            <a href="<?php echo base_url().'index.php/usuario/home_low_lv' ?>" class="center brand-logo">BOOKERS</a>
            <ul class="left hide-on-med-and-down">
                <li>
                    <a href="<?php echo base_url().'index.php/usuario/mostrarlogar'?>">Cadastrar</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/usuario/mostrarlogar'?>">Entrar</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

 <div class="jumbotron row valign-wrapper">
      <div class="vallign col s6 offset-s0">
        <h1 class="thin">BOOKERS</h1>
        <p class="flow-text">Sua biblioteca virtual, feita pra voce, por voce</p>
        <p class="flow-text">Faca seu login e acesse seus livros favoritos</p>
      </div>
        <div id="logingeral" class="col s6" >
        <br><br><br>
           <?php $attributes = array('class' => 'center-align');?>
            <?php echo form_open('index.php/usuario/logar', $attributes)?>
                <div class="row white-text" >
                    <div class="center-align" class="input-field col s3">
                        <input required id="login" type="text" placeholder="Usuário" name="login" autofocus>
                    </div>
                </div>
                <div class="row white-text">
                    <div class="center-align" class="input-field s3">
                        <input required id ="password" type="password" placeholder="Senha" name="senha" autofocus>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="enviar">Submit
                    <i class="material-icons right">send</i>
                </button>
        <?php echo form_close() ?><br>
        </div>
        </div>
      </div>
    </div>
    
    
</body>
<footer>
        
</footer>
</html>