<?php if ($this->session->userdata('prioridade')==2){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
<div class="direita container meio">
    <h4>Atualizar Livro</h4>
    <?php if (isset($variavel)){echo $variavel;}?><br>
    <?php echo form_open('index.php/livros/atualizar') ?>
    <table>
            <thead>
            </thead>
            <tbody>
                <tr class='refe'>
                    <td><span>Nome do livro</span></td>
                    <td><input required id="nome" value="<?php echo $livro->nome; ?>" name="nome" type="text"/></td>
                </tr>
                <tr class='refe'>
                    <td><span>Autor</span></td>
                    <td><input required id="nome" value="<?php echo $livro->autor; ?>" name="autor" type="text"/></td>
                </tr>
                <tr class='refe'>
                <td><span>Ediçao</span></td>
                   <td> <input required id="nome" value="<?php echo $livro->edicao; ?>" name="edicao" type="text"/></td>
                </tr>
                <tr class='refe'>
                    <td><span>Editora</span></td>
                    <td><input required id="nome" value="<?php echo $livro->editora; ?>" name="editora" type="text"/></td>
                </tr>
                <tr>    
                    <td></td>
                    <td>
                        <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
                            <span>Atualizar</span>
                            <i class="mdi-content-send right"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
    </table>
            
        <input type="hidden" name='id' value="<?php echo $livro->id ?>" />
        <input type="hidden" value="Acervo Geral" name="status" ><br>

    <?php form_close() ?>
</div>
<?php echo $this->load->view('_inc/footer') ?>

