<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>

<div id="sug" class="container meio">
    <h4>Perfis</h4>
    <p>Busque aqui por perfis de usuários.<br>___</p>
    <?php if(isset($variavel)){echo $variavel;}?><br>
	<?php echo form_open('index.php/usuario/buscarPerfil')?>
	    <input required id="texto" name="descricao" value='' placeholder="Busca" type="text">
	    <br>
	    <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
            <span>Enviar</span>
            <i class="mdi-content-send right"></i>
        </button>
	<?php form_close()?>
</div>

<?php echo $this->load->view('_inc/footer') ?>
