<?php $this->load->view('_inc/headeradm') ?>
<div id="wrapper-body" class="container meio">
    <?php 
    if($this->session->userdata('mensagem') == "errodel1")
        echo "Uma conta com livro vinculado não pode ser deletada!";
    ?>
    <h4 class="center">Membros</h4>
    <?php if(($infos_usuario!=NULL)&&(sizeof($infos_usuario)>1)){?>
        <div class = "row meio">
            <table id="table" class="highlight center">
                <thead>
                    <tr >                    
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Usuario</th>
                        <th>Prioridade</th>
                        <th>Acões</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $usuario_atual= $this->session->userdata('usuario'); ?>
                        <?php if( isset($infos_usuario) ){
                            foreach ($infos_usuario as $row) {
                                if ($row->usuario!=$usuario_atual){?>
                            <tr id="<?php echo alternator('test1', 'test2'); ?>">                        
                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->telefone; ?></td>
                                <td><?php echo $row->usuario; ?></td>
                                <td><?php if( $row->tipo_usuario_id==2)echo 'Administrador';else echo'Usuario'; ?></td>                                                
                                <td><a href="<?php echo base_url().'index.php/admin/deletar?id='.$row->id ?>">Deletar</a> |
                                <a href="<?php echo base_url().'index.php/admin/atualizacao?id='.$row->id ?>">Atualizar</a></td>

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
