<?php if ($this->session->userdata('prioridade')==2){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>

<div id="cadastrolivro" class="direita container">
    <div id="cadastrar_livro">
        <?php echo form_open('index.php/livros/cadastrar')?>
            <h4>Cadastrar livro</h4>
            <?php if (isset($variavel)){echo $variavel;}?><br>
            <input type="text" value="" name="nome" placeholder="Nome" required><br><br>
            <input type="text" value="" name="autor" placeholder="Autor" required><br><br>
            <input type="text" value="" name="editora" placeholder="Editora" required><br><br>
            <input type="text" value="" name="edicao" placeholder="Edição" required><br><br>
            <input type="hidden" value="Acervo Geral" name="status" ><br><br>
            <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
                <span>Enviar</span>
                <i class="mdi-content-send right"></i>
            </button>
        <?php form_close() ?>
    </div>
</div>