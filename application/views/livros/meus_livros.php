<?php if ($this->session->userdata('prioridade')==1){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
<div id="meuslivros" class="direita container meio">
<?php 
    $id_usuario = $this->session->userdata['id'];
    $flag=0;
?>
    
<br>
    <?php if ($emprestimo!=NULL){?>
    <table>
        <thead>
            <tr>
                <th>   Nome  livro </th>
                <th>      data de inicio     </th>
                <th>      data de devolução     </th>
                <th>      Ações     </th>              
            </tr>
        </thead>
        <tbody>

            <?php foreach($emprestimo as $row){?>
            <?php if ($id_usuario==$row->usuario_id){ $flag=1; ?> 
                <tr id="<?php echo alternator('test1', 'test2'); ?>">
                    <td><a href="<?php echo base_url().'index.php/livros/info_livro?id='.$row->livro_id?>"><?php foreach($livros as $row2){if ($row->livro_id==$row2->id){echo $row2->nome;};}?></a></td>                        
                    <td><?php echo $row->data_inicio;?></td> 
                    <td><?php echo $row->data_devolucao;?></td> 
                    <td><a href='<?php echo base_url()."index.php/emprestimo/devolver_livro?id=$row->id&livro_id=$row->livro_id"?>'>Devolver Livro</a>

                </tr>   
            <?php }}} ?>
        </tbody>
    </table>

<?php if ($flag==0){?>
<span>Voce nao pegou nenhum livro!</span>
<?php }?>



</body>


</html>

<!--
<?php if ($row->status=="Acervo Geral"){?> <td><a href="<?php echo base_url().'index.php/livros/reservar_livro?id='.$row->id?>">Pegar livro</a><?php }?>
            </tr>   
                            base_url().'index.php/emprestimo/devolver_livro?id=$row->id$livro_id=$row->livro_id'
-->
</div>
<?php echo $this->load->view('_inc/footer') ?>
