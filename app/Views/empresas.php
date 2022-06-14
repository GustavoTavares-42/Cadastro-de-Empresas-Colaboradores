<button id="btn_add_emp"><a href="<?= base_url("/")?>">Add Empresa</a></button>
<?php foreach ($empresa as $row):?>
<div class="card" >
	<h4><b>Empresa</b></h4>
	<table>
		<tr>
			<th>Razão Social</th>
			<th>CNPJ</th>
			<th>Telefone</th>
			<th>E-mail</th>
			<th>Endereço</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		<tr>
			<td value="<?php echo $row->razaosocial; ?>"><?php echo $row->razaosocial; ?></td>
			<td value="<?php echo $row->cnpj; ?>"><?php echo $row->cnpj; ?></td>
			<td value="<?php echo $row->fone; ?>"><?php echo $row->fone; ?></td>
			<td value="<?php echo $row->email; ?>"><?php echo $row->email; ?></td>
			<td value="<?php echo $row->endereco; ?>"><?php echo $row->endereco; ?></td>
			<td value="editar"><button id="btn"><a href="<?= base_url("Empresa/editar/$row->id")?>">Editar</a></button></td>
			<td value="editar"><button id="btn"><a href="<?= base_url("Empresa/excluir/$row->id")?>" onclick="return confirm('Deseja excluir?');">Excluir</a></button></td>
		</tr>
	</table>
	<div >
		<button id="btn"><a href="<?= base_url("Colaboradores/viewColaborador/$row->id")?>">Colaboradores</a></button>
	</div>	     
</div>
	<?php endforeach; ?>
