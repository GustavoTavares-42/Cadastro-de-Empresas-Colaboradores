<form id="form_edit_emp"method="POST">
	<button id="btn"><a href="<?= base_url("Empresa/empresas")?>">Voltar</a></button>
	<h2 style="color: white;">Editar Empresa</h2> 
	<label for="nome"><b>Razão Social</b></label>
	<input type="text" name="razaosocial" id="razaosocial" value="<?php echo $empresa->razaosocial; ?>">
	<label for="cpf"><b>CNPJ</b></label>
	<input type="text" name="cnpj" id="cnpj" value="<?php echo $empresa->cnpj; ?>">
	<label for="fone"><b>Telefone</b></label>
	<input type="tel" name="fone" id="fone" placeholder="00000-0000" value="<?php echo $empresa->fone; ?>">
	<label for="email"><b>E-mail</b></label>
	<input type="email" name="email" id="email" value="<?php echo $empresa->email; ?>">
	<label for="endereco"><b>Endereço</b></label>
	<input type="text" id="endereco" name="endereco" rows="4" cols="50" value="<?php echo $empresa->endereco; ?>">
	<input type="submit" value="<?php echo $acao ?>">
</form>