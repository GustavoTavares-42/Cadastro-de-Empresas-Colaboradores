

		<form id="form_emp" action="<?= base_url('Empresa/cadastrar')?>" method="POST">
		<button id="btn"><a href="<?= base_url('Empresa/empresas')?>">Consultar Dados</a></button>
		<h2>Cadastrar Empresa</h2> 
			<label for="nome"><b>Razão Social</b></label>
			<input type="text" name="razaosocial" id="razaosocial" required="required">
			<label for="cpf"><b>CNPJ</b></label>
			<input type="text" name="cnpj" id="cnpj" required="required">
			<label for="fone"><b>Telefone</b></label>
			<input type="tel" name="fone" id="fone" placeholder="00000-0000" required="required">
			<label for="email"><b>E-mail</b></label>
			<input type="email" name="email" id="email">
			<label for="endereco"><b>Endereço</b></label>
			<textarea id="endereco" name="endereco" rows="4" cols="50"></textarea>
			<input type="submit" value="Cadastrar">
		</form>
