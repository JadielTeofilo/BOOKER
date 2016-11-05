<?php if ($this->session->userdata('prioridade')==1){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
<div id="retirados" class="direita meio container">
    <h4>Livros retirados</h4>
    <?php if ($emprestimo==NULL){?>
    <span>Todos os livros do acervo estão disponíveis!</span>
    <?php }else{?>

        <table>
        <thead>
            <tr>
                <th>   Nome  livro </th>
                <th>   Nome  usuario </th>
                <th>      data de inicio     </th>
                <th>      data de devolução     </th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($emprestimo)){
                foreach($emprestimo as $row){?>
                    <tr id="<?php echo alternator('test1', 'test2'); ?>">
                        <td><?php foreach($livros as $row2){if ($row->livro_id==$row2->id){echo $row2->nome;};}?></td>                        
                        <td><?php foreach($usuario as $row1){if ($row->usuario_id==$row1->id){echo $row1->nome;};}?></td>
                        <td><?php echo $row->data_inicio;?></td> 
                        <td><?php echo $row->data_devolucao;?></td> 

                    </tr>   
            <?php }}?>
        </tbody>
    </table>
    <?php } ?>

</div>

