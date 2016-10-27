<?php $this->load->view('_inc/headeradm') ?>
<div class="direita_cima">
    <div class="inside">
        <h4>Sugestoes</h4>
    </div>
</div>
<div id="sugestoes" class="container meio">
    <?php if ( !empty($sugestao)  ){?>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Sugestão</th>
                        <th>Data</th>
                        <th>Ação</th>

                    </tr>
                </thead>

                <tbody>
                    
                    <?php foreach ($sugestao as $row){ ?>
                    <tr  id="<?php echo alternator('test1', 'test2'); ?>">                        
                        <td><?php echo $row->descricao; ?></td>
                        <td><?php echo $row->data; ?></td>
                        <td><a href="<?php echo base_url().'index.php/sugestao/delete?id='.$row->id ?> ">Deletar</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    <?php }else{?>
    <span>Não existem sugestões cadastradas</span>
    <?php }?>
</div>
        <?php echo $this->load->view('_inc/footer') ?>
