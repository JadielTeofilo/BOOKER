<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
<div class="direita container">
    <div id="impimir_dados" class = "meio">
        <?php 
        if($this->session->userdata('mensagem') == "errodel")
            echo "Uma conta com livro vinculado não pode ser deletada!";
        if (isset($var)){
            echo $var;
        }?>
            <br><br><br>
        <h4 class="center">Perfil</h4>
        <?php echo form_open('index.php/admin/atualizar');?>
        <input type="hidden" name='id' value="<?php echo $usuario->id; ?>" />  
        <table class="highlight">
            <tr>
                <td>Nome:</td>
                <td><input id="nome" type="text" name="nome" value="<?php echo $usuario->nome; ?>"/></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input id="nome" type="text" name="email" value="<?php echo $usuario->email; ?>"/></td>
            </tr>


            <tr>
                <td>Usuario:</td>
                <td><input id="nome" type="text" name="usuario" value="<?php echo $usuario->usuario; ?>"/></td>
            </tr>

            <tr>
                <td>Senha:</td>
                <td><input id="nome" type="text" name="senha" value="<?php echo $usuario->senha; ?>"/></td>
            </tr>


        </table>
        <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
            <span>Atualizar</span>
            <i class="mdi-content-send right"></i>
        </button>
        <br><br>
        <a class="btn waves-effect waves-light grey darken-3" href="<?php echo base_url().'index.php/admin/deletar1?id='.$usuario->id ?>">
            <span>Deletar Meu Cadastro</span>
        </a><br> <br><br><br><br><br><br><br><br>
        <?php form_close() ?>
     </div>
</div>
<?php echo $this->load->view('_inc/footer') ?>

