<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
    <?php    $prioridade = $this->session->userdata('prioridade');    ?>
    <h4 class = "container meio">Informações do Livro</h4>
<div id="infolivro" class="container Titulo1 centro">
    <div>
        <span>Nome: <?php echo $livro->nome;?></span><br><br>
        <span>Autor: <?php echo $livro->autor;?></span><br><br>
        <span>Editora: <?php echo $livro->editora;?></span><br><br>
        <span>Edição: <?php echo $livro->edicao;?></span><br><br>
        <?php if($prioridade == 3){?>
        <span>Data de emprestimo: <?php if(isset($emprestimo->data_inicio)){echo $emprestimo->data_inicio;}else echo "Ninguém com o livro";?></span><br><br>
        <span>Data de devolução: <?php if(isset($emprestimo->data_devolucao)){echo $emprestimo->data_inicio;}?></span><br><br>
        <span>Pessoa com o livro: <?php echo $usuario->nome;?></span><br><br>
        <?php }?>
        <?php if ($this->session->userdata('prioridade')<3){
            $meu = 0;
            foreach($emprestimos as $emprestimo){
                if(($livro->id == $emprestimo->livro_id)&&($this->session->userdata('id') == $emprestimo->usuario_id)){
                    $meu = 1;
                }
            }
            if(!$meu){?>
            <td>
                <a href="<?php echo base_url().'index.php/emprestimo/reservar_livro?id='.$livro->id?>">
                    Pegar livro
                </a> 
                <?php if($this->session->userdata('prioridade')==2){?>|| 
                <a href="<?php echo base_url().'index.php/usuario/adicionarLivroPerfil?id='.$livro->id?>">
                    Adicionar ao perfil
                </a>
                <?php }?>
            </td>
        <?php } else{ ?>
            <td>
                <span> - </span>
            </td>
        <?php } 
        }?>
    </div>
</div>
<?php echo $this->load->view('_inc/footer') ?>
