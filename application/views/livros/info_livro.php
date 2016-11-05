<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
    <?php    $prioridade = $this->session->userdata('prioridade');    ?>
    <h4 class = "container meio">Informações do Livro</h4>
<div id="infolivro" class="container Titulo1 centro">
    <div>
        <span>Nome: <?php echo $livro->nome;?></span><br><br>
        <span>Autor: <?php echo $livro->autor;?></span><br><br>
        <span>Editora: <?php echo $livro->editora;?></span><br><br>
        <span>Edição: <?php echo $livro->edicao;?></span><br><br>
        <?php if (($prioridade==1)&&($livro->status=="Acervo Geral")){?> <td><a href="<?php echo base_url().'index.php/livro/reservar_livro?id='.$livro->id?>">Pegar livro</a><?php }if(($livro->status!="Acervo Geral")){?>
        <span>Data de emprestimo: <?php echo $emprestimo->data_inicio;?></span><br><br>
        <span>Data de devolução: <?php echo $emprestimo->data_devolucao;?></span><br><br>
        <span>Pessoa com o livro: <?php echo $usuario->nome;?></span><br><br>
        <?php }?>
    </div>
</div>
<?php echo $this->load->view('_inc/footer') ?>
