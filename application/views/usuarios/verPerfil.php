<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
<div class="direita container">
    <div id="impimir_dados" class = "meio">
        <?php 
        if($this->session->userdata('mensagem') == "errodel")
            echo "Uma conta com livro vinculado não pode ser deletada!";
        if (isset($var)){
            echo $var;
        } ?>
            <br><br><br>
        <h4 class="center"><?= $usuario->nome ?></h4>
        <?php echo form_open('index.php/admin/atualizar');?>
        <input type="hidden" name='id' value="<?php echo $usuario->id; ?>" />  
        <table class="highlight">
            <tr>
                <td>Nome:</td>
                <td><input id="nome" readonly type="text" name="nome" value="<?php echo $usuario->nome; ?>"/></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input id="nome" readonly type="text" name="email" value="<?php echo $usuario->email; ?>"/></td>
            </tr>

            
            <tr>
                <td>Usuario:</td>
                <td><input id="nome" readonly type="text" name="usuario" value="<?php echo $usuario->usuario; ?>"/></td>
            </tr>

            <tr>
                <td>Cargo:</td>
                <td><input id="nome" readonly type="text" name="usuario" value="<?php if($this->session->userdata('prioridade')==2) echo 'Professor'; if($this->session->userdata('prioridade')==1) echo 'Aluno'; ?>"/></td>
               
            </tr>

            <?php if($usuario->tipo_usuario_id==2){ ?>
            <tr>
                <td>Livros Recomendados:</td>
                <?php
                $nome = null;
                $id = null;
                foreach($livroProf as $key){ 
                    foreach($livros as $livro){
                        if($livro->id == $key->professor_usuario_id){
                            $nome = $livro->nome;
                            $id   = $livro->id;
                        }
                    }if(isset($nome)){
                    ?>
                    <td>
                        <a href="<?php echo base_url().'index.php/livros/info_livro?id='.$id?>">
                            <span>
                                <?php echo $nome; ?>
                            </span>
                        </a>    
                    </td>
                <?php }
                $nome = null;
                $id = null;
                } if(!sizeof($livroProf)){ ?>
                <td>
                    <a hpef="#">
                        <span>
                            <?php echo "Nenhum Livro Relacionado"; ?>
                        </span>
                    </a>    
                </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>

        <?php form_close() ?>
     </div>
</div>
<?php echo $this->load->view('_inc/footer') ?>

