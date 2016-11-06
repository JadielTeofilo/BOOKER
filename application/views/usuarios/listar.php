<?php $this->load->view('_inc/headeruser') ?>
<div id="wrapper-body" class="container meio">
    <?php 
    if($this->session->userdata('mensagem') == "errodel1")
        echo "Uma conta com livro vinculado não pode ser deletada!";
    ?>
    <br><br><br>
    <h4 class="center">Resultado da busca</h4>
    <?php echo form_open('index.php/usuario/buscarPerfil')?>
        <input required id="texto" name="descricao" value='' placeholder="Busca" type="text">
        <br>
        <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
            <i class="mdi-content-send right"></i>
        </button>
    <?php form_close()?>
    <?php if(($infos_usuario!=NULL)){?>
        <div class = "row meio">
            <table >
                <thead>
                    <tr >                    
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Prioridade</th>
                        <th>Acões</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $usuario_atual= $this->session->userdata('usuario'); ?>
                        <?php if( isset($infos_usuario) ){
                            foreach ($infos_usuario as $row) {
                                if (1){?>
                            <tr id="<?php echo alternator('test1', 'test2'); ?>">                        
                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->usuario; ?></td>
                                <td><?php if( $row->tipo_usuario_id==2)echo 'Administrador';else echo'Usuario'; ?></td>                                                
                                <td><a href="<?php echo base_url().'index.php/usuario/ver_perfil?id='.$row->id ?>">Visualizar</a></td>

                            </tr>
                            <?php }}}?>
                    </tbody>

                </table>
            </div>
        <?php }else{?>
        <span >Não há usuarios cadastrados além de voce.</span>
    <?php }?>
    <?php $variavel="";?>
    
    
</div>

<?php echo $this->load->view('_inc/footer') ?>
