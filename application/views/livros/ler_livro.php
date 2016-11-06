<?php if ($this->session->userdata('prioridade')==3){echo $this->load->view('_inc/headeradm');}else{ echo $this->load->view('_inc/headeruser');}  ?>
    <?php    $prioridade = $this->session->userdata('prioridade');    ?>
    <h4 class = "container meio">Informações do Livro</h4>
<div id="infolivro" class="container Titulo1 centro">
    <div>
        <span>Nome: <?php echo $livro->nome;?></span><br><br>
        <div>
        <div class="downloadC"></div>
        </div>
        <div>
            <object data="<?php echo base_url(); ?>/complemento/acervo/<?php echo $livro->pdf; ?>" type="application/pdf" width="1200" height="1100">
            alt : <a href="test.pdf">test.pdf</a>
            </object>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
<?php echo $this->load->view('_inc/footer') ?>
