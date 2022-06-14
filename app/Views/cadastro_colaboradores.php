
	<form id="form_colab" action="<?= base_url("Colaboradores/cadastra/".$empresa['id'])?>" method="POST">
	<button id="btn"><a href="<?= base_url("Empresa/empresas")?>">Voltar</a></button>
	<h2>Cadastrar Colaborador</h2> 
		<label for="nome"><b>Nome Completo</b></label>
		<input type="text" name="nome" id="nome" required="required">
		<label for="cpf"><b>Teleone</b></label>
		<input type="text" name="fone" id="fone" placeholder="00000-0000" required="required">
		<label for="fone"><b>E-mail</b></label>
		<input type="tel" name="email" id="email"  required="required">
		<label for="email"><b>Data de Nascimento</b></label>
		<input type="date" name="data" id="data">
		<input type="submit" value="Cadastrar">
	</form>
</div>