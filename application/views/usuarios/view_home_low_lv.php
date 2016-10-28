<?php $this->load->view('_inc/headeruser') ?>
<div id="homeadmin" class="direita">
    
    <div class="bemvindo">
	    <strong class="Titulo">BOOKERS</strong><br>
	    <span class="Titulo1">Bem-vindo <?php echo $this->session->userdata('usuario');?></span>
    </div>



</div>
<?php echo $this->load->view('_inc/footer') ?>
