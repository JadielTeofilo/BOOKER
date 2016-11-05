<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>

<br><br><br><br>
<div id="cadastrolivro" class="direita container">
    <div id="cadastrar_livro">
        <?php echo form_open_multipart('index.php/livros/cadastrar')?>
            <h4>Cadastrar livro</h4>
            <?php if (isset($variavel)){echo $variavel;}?><br>
            <input type="text" value="" name="nome" placeholder="Nome" required><br><br>
            <input type="text" value="" name="autor" placeholder="Autor" required><br><br>
            <input type="text" value="" name="editora" placeholder="Editora" required><br><br>
            <input type="text" value="" name="edicao" placeholder="Edição" required><br><br>
            <div class="input-field col s5 offset-s2 offset-m2 m4 center center-allign">
                <h5><?= $this->lang->line('rel_file') ?></h5>
                <div class="file-field input-field center-allign">
                    <input class="file-path validate" type="text">
                    <div id="activepdffile" class="btn waves-effect center-allign">
                        <span>ADD File</span>
                        <input type="file" name="pdffile" >
                    </div>
                </div>
            </div>
            <br>

            <input type="hidden" value="Acervo Geral" name="status" ><br><br>
            <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
                <span>Enviar</span>
                <i class="mdi-content-send right"></i>
            </button>
<br><br><br>
        <?php form_close() ?>
    </div>
</div>

<?php echo $this->load->view('_inc/footer') ?>
