<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
    <div class="direita container">
    <body>
    <br>
    <?php
       $prioridade = $this->session->userdata('prioridade');
    ?>
    <?php if ($livro!=NULL){?>
        <table >
            <thead>
                <tr>
                    <th>   Nome do livro  </th>
                    <th>      Status     </th>
                    <th>      Ações       </th>
                </tr>
            </thead>
            <tbody>

                <?php if (isset($livro)){
                    foreach($livro as $row){?>
                <tr  id="<?php echo alternator('test1', 'test2'); ?>">
                    <td><a href="<?php echo base_url().'index.php/livros/info_livro?id='.$row->id?>"><?php echo $row->nome;?></a></td>
                    <td><?php echo $row->status;?></td> 
                    <?php if ($prioridade==2){?> <td><a href="<?php echo base_url().'index.php/livros/deletar?id='.$row->id?>">Deletar</a>||<a href="<?php echo base_url().'index.php/livros/atualizacao?id='.$row->id?>">Atualizar</a></td><?php }?>
                    <?php if (($prioridade==1)&&($row->status=="Acervo Geral")){?> <td><a href="<?php echo base_url().'index.php/emprestimo/reservar_livro?id='.$row->id?>">Pegar livro</a><?php }?>
                </tr>   
                <?php }}?>
            </tbody>
        </table>
    <?php }else{?>
    <span>Não há livros cadastrados</span><br>
    <?php }?>
    <?php if ($prioridade==2){?>  <br>  
    <?php }?>
    <br><br>
    <?php if($prioridade==2){?>
    <?php }else{ ?>
    <?php }?>
    </body>
</div>
<?php echo $this->load->view('_inc/footer') ?>
