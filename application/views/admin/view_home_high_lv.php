<?php $this->load->view('_inc/headeradm') ?>
<div id="homeadmin" class="direita">
    
    <div class="bemvindo">
	    <strong class="Titulo">BOOKERS</strong><br>
	    <span class="Titulo1">Bem-vindo <?php echo $this->session->userdata('usuario');?></span>
    </div>
<object data="my-pdf-file.pdf" type="application/pdf" width="900" height="800">
      <!-- support older browsers -->
      <embed src="programa.pdf" type="application/pdf" width="900" height="800"/>
      <!-- For those without native support, no pdf plugin, or no js -->
      <p>It appears you do not have PDF support in this web browser. <a href="programa	.pdf" target="_blank">Click here to download the document.</a></p>
</object>


</div>
        <?php echo $this->load->view('_inc/footer') ?>

