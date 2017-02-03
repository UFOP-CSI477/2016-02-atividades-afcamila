<div class="page-header">

<div class="col-md-2"></div>
<div class="col-md-8">
	<h3>Visualizar Exames</h3>

<table class="table table-striped">
	<tr>
		<th>Id</th>
		<th>Procedimento</th>
		<th>Data</th>
		<th>Editar</th>
		<th>Deletar</th>
	</tr>

	<?php foreach($exames as $e): ?>
		<tr>
			<td><?= $e['Exame']['id']; ?></td>
			<td><?= $this->Html->link($e['Procedimento']['nome'], array('controller' => 'procedimentos',
      'action' => 'view', $e['Exame']['procedimento_id'])); ?></td>
			<td><?= $e['Exame']['data']; ?></td>
      		<td><?= $this->Html->link("Editar", array('controller' => 'exames', 'action' => 'edit', $e['Exame']['id'])); ?></td>
      		<td><?= $this->Html->link("Deletar", array('controller' => 'exames', 'action' => 'delete', $e['Exame']['id'])); ?></td>


	<?php endforeach; ?>
</table>
</div>
<div class="col-md-2"></div>

<div class="row"></div>
<!--botao voltar-->
<?= $this->Html->link("Voltar", array('controller' => 'pages','action' => 'home'), array('class'=>'btn btn-default')); ?>
</div>