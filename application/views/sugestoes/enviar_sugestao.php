<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>

<div id="sug" class="container meio">
    <h4>Sugestões</h4>
    <p>Sua opinião é importante, ajude-nos a almentar o acervo.<br>___</p>
    <?php if(isset($variavel)){echo $variavel;}?><br>
	<?php echo form_open('index.php/sugestao/enviar1')?>
	    <input required id="texto" name="descricao" value='' placeholder="Digite aqui sua sugestão de livro." type="text">
	    <br>
	    <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
            <span>Enviar</span>
            <i class="mdi-content-send right"></i>
        </button>
	<?php form_close()?>
</div>

<?php echo $this->load->view('_inc/footer') ?>
