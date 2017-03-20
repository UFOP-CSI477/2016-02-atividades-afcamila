

<h1>Visualizar Pacientes</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Login</th>
		<th>Senha</th>
	</tr>

	<?php foreach($pacientes as $p): ?>
		<tr>
			<td><?= $p['Paciente']['id']; ?></td>
			<td><?= $this->Html->link($p['Paciente']['nome'],array('controller' => 'pacientes', 'action' => 'view')); ?></td>
			<td><?= $p['Paciente']['login']; ?></td>
      		<td><?= $p['Paciente']['senha']; ?></td>

		</tr>
	<?php endforeach; ?>
</table>
