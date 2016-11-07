<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
    <div class="direita container">
    <body>
    <br>
    <?php
       $prioridade = $this->session->userdata('prioridade');
    ?>
    <h4 class="center">Acervo cadastrado</h4>
    <?php if ($livro!=NULL){?>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>   Nome do livro  </th>
                    <th>      Ações       </th>
                </tr>
            </thead>
            <tbody>

                <?php if (isset($livro)){
                    foreach($livro as $row){?>
                <tr >
                    <td><a href="<?php echo base_url().'index.php/livros/info_livro?id='.$row->id?>"><?php echo $row->nome;?></a></td>
                    <?php if ($prioridade==3){?> <td><a href="<?php echo base_url().'index.php/livros/deletar?id='.$row->id?>">Deletar</a>||<a href="<?php echo base_url().'index.php/livros/atualizacao?id='.$row->id?>">Atualizar</a></td><?php }?>
                    <td>
                    <?php if (($prioridade<3)){
                        $meu = 0;
                        foreach($emprestimos as $emprestimo){
                            if(($row->id == $emprestimo->livro_id)&&($this->session->userdata('id') == $emprestimo->usuario_id)){
                                $meu = 1;
                            }
                        }
                        if(!$meu){?>
                            <a href="<?php echo base_url().'index.php/emprestimo/reservar_livro?id='.$row->id?>">
                                Pegar livro
                            </a> ||
                    <?php } ?>
                        <?php if($this->session->userdata('prioridade')==2){?>
                        <a href="<?php echo base_url().'index.php/usuario/adicionarLivroPerfil?id='.$row->id?>">
                            Adicionar ao perfil
                        </a>
                        <?php }
                    } ?>
                    </td>
                </tr>   
                <?php }}?>
            </tbody>
        </table>
    <?php }else{?>
    <span>Não há livros cadastrados</span><br>
    <?php }?>
    <?php if ($prioridade==3){?>  <br>  
    <?php }?>
    <br><br>
    <?php if($prioridade==3){?>
    <?php }else{ ?>
    <?php }?>
    </body>
</div>
<?php echo $this->load->view('_inc/footer') ?>
