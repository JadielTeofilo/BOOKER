<?php echo $this->load->view('_inc/header') ?>

<!--Menu Superior-->
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
    </div> 

</body>
<footer>
        
</footer>
</html>