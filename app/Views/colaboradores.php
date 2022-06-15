<div style="text-align: center; width: 100%; margin: 0px 0;">
	<form action="<?= base_url("Colaboradores/viewColaborador" . $empresa['id'])?>" method="POST" style="background-color: white; box-shadow:none;"> 
	<button id="btn"><a href="<?= base_url("Empresa/empresas")?>">Voltar</a></button>
			<div class="card" style="position:relative; left:-150px;">
				<h4><b><?php echo $empresa['razaosocial']; ?></b></h4>
				<table>
					<tr>
						<th>Nome</th>
						<th>Telefone</th>
						<th>E-mail</th>
						<th>Data de Nascimento</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
					<?php foreach ($colaborador as $row):?>
					<tr>
						<td value="<?php echo $row->nome; ?>"><?php echo $row->nome; ?></td>
						<td value="<?php echo $row->fone; ?>"><?php echo $row->fone; ?></td>
						<td value="<?php echo $row->email; ?>"><?php echo $row->email; ?></td>
						<td value="<?php echo $row->data; ?>"><?php echo $row->data; ?></td>
						<td value="editar"><button id="btn"><a href="<?= base_url("Colaboradores/editar/$row->id")?>">Editar</a></button></td>
						<td value="excluir"><button id="btn"><a href="<?= base_url("Colaboradores/excluir/$row->id")?>" onclick="return confirm('Deseja excluir?');">Excluir</a></button></td>
					</tr>
					<?php endforeach; ?>
				</table>	     
			</div>
	</form>
</div>