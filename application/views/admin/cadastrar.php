<?php echo $this->load->view('_inc/headeradm') ?>
<div class="direita container">
    <br>
    <br>
    <br>
    <div id="cadastrar" class="col s6 offset-s0 center">
        <?php echo $variavel ?><br>
	<?php echo form_open('index.php/admin/cadastrar')?>
	<h4>Cadastrar Usuário</h4><br>	
	    <input class="col s6 center" id="nome"type="text" name="nome" placeholder="Nome" required/><br><br>

        <input class="col s6 center" id="nome" type="email" name="email" placeholder="Email" required /><br><br>

        <input class="col s6 center" id="nome" type="text" name="cargo" placeholder="Cargo" required /><br><br>

        <input class="col s6 center" id="nome" type="text" name="usuario" placeholder="Usuario" required /><br><br>

        <input class="col s6 center" id="nome" type="text" name="senha" placeholder="Senha" required /><br><br>
        
        <span>Tipo de usuario</span>
        <input class="col s6 center" class = "black" value = "1" name="tipo_usuario_id" type="radio" id="test1" />
            <label for="test1">Aluno</label>
        <input class="col s6 center" class = "black" value = "2" name="tipo_usuario_id" type="radio" id="test2" />
            <label for="test2">Professor</label>
        <input class="col s6 center" class = "black" value = "3" name="tipo_usuario_id" type="radio" id="test3" />
            <label for="test3">Admin</label>            
        <br><br>

        <span>Sexo</span>
        <input class="col s6 center" class = "black" value = "0" name="tipo_usuario_id" type="radio" id="test1" />
            <label for="test1">Feminino</label>
        <input class="col s6 center" class = "black" value = "1" name="tipo_usuario_id" type="radio" id="test2" />
            <label for="test2">Masculino</label>           
        <br><br>

        <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
            <span>Cadastrar</span>
            <i class="mdi-content-send right"></i>
        </button>
        <br>
        <br>
        <br>
        <br>

        <br>


        

        <?php form_close() ?><br>
    </div>
</div>

<?php echo $this->load->view('_inc/footer') ?>