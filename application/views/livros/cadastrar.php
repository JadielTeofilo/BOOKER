<?php if ($this->session->userdata('prioridade')==1){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>

<div id="cadastrolivro" class="direita container">
    <div id="cadastrar_livro">
        <?php echo form_open('index.php/livros/cadastrar')?>
            <h4>Cadastrar livro</h4>
            <?php if (isset($variavel)){echo $variavel;}?><br>
            <input type="text" value="" name="nome" placeholder="Nome" required><br><br>
            <input type="text" value="" name="autor" placeholder="Autor" required><br><br>
            <input type="text" value="" name="editora" placeholder="Editora" required><br><br>
            <input type="text" value="" name="edicao" placeholder="Edição" required><br><br>
            <div class="input-field col s5 offset-s2 offset-m2 m4">
                <h5><?= $this->lang->line('rel_file') ?></h5>
                <!-- <div id="activeExcelFile" class="btn waves-effect"><p>ADD</p></div>
                <input type="file" name="excelFile" style="display: none"> -->
                <div class="file-field input-field">
                    <input class="file-path validate" type="text">
                    <div id="activeExcelFile" class="btn waves-effect">
                        <p>ADD</p>
                        <input type="file" name="excelFile" >
                    </div>
                </div>
            </div>
            <input type="hidden" value="Acervo Geral" name="status" ><br><br>
            <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
                <span>Enviar</span>
                <i class="mdi-content-send right"></i>
            </button>
        <?php form_close() ?>
    </div>
</div>