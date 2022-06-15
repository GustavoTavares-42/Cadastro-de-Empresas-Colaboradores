<form id="form_edit_colab" method="POST">
	<button id="btn"><a href="<?= base_url("Colaboradores/viewColaborador/$colaborador->empresa_id")?>">Voltar</a></button>
	<h2 style="color: white;">Editar Colaborador</h2> 
	<label for="nome"><b>Nome</b></label>
	<input type="text" name="nome" id="nome" value="<?php echo $colaborador->nome; ?>">
	<label for="fone"><b>Telefone</b></label>
	<input type="tel" name="fone" id="fone" placeholder="00000-0000" value="<?php echo $colaborador->fone; ?>">
	<label for="email"><b>E-mail</b></label>
	<input type="email" name="email" id="email" value="<?php echo $colaborador->email; ?>">
	<label for="data"><b>Data de Nascimento</b></label>
	<input type="data" id="data" name="data" rows="4" cols="50" value="<?php echo $colaborador->data; ?>">
	<input type="submit" value="<?php echo $acao ?>">
</form>