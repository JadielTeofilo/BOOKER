<?php echo $this->load->view('_inc/headeradm') ?>
<div class="direita container">
    <div id="cadastrar" class="meio">
        <?php echo $variavel ?><br>
	<?php echo form_open('index.php/admin/cadastrar')?>
	<h4>Cadastrar Usuário</h4><br>	
	    <input id="nome"type="text" name="nome" placeholder="Nome" required/><br><br>

        <input id="nome" type="email" name="email" placeholder="Email" required /><br><br>

        <input id="nome" type="text" name="cargo" placeholder="Cargo" required /><br><br>

        <input id="nome" type="text" name="telefone" placeholder="Telefone" required /><br><br>

        <input id="nome" type="text" name="usuario" placeholder="Usuario" required /><br><br>

        <input id="nome" type="text" name="senha" placeholder="Senha" required /><br><br>

        <input id="nome" type="text" name="bairro" placeholder="Bairro" required /><br><br>

        <input id="nome" type="text" name="cidade" placeholder="Cidade" required /><br><br>

        <input type="text" id="nome" name="estado" placeholder="Estado" required /><br><br>

        <input type="text" id="nome" name="complemento" placeholder="Complemento" required /><br><br>

        <input type="text" id="nome" name="cep" placeholder="CEP" required /><br><br>
        
        <span>Tipo de usuario</span>
        <input class = "black" value = "1" name="tipo_usuario_id" type="radio" id="test1" />
            <label for="test1">Usuario</label>
        <input class = "black" value = "2" name="tipo_usuario_id" type="radio" id="test2" />
            <label for="test2">Administrador</label>
        <br><br>
        <button class=" center but btn waves-effect waves-light grey darken-3 col s12 m12 l8 offset-l2" type="submit">
            <span>Cadastrar</span>
            <i class="mdi-content-send right"></i>
        </button>
        <br>


        

        <?php form_close() ?><br>
    </div>
</div>

<?php echo $this->load->view('_inc/footer') ?>