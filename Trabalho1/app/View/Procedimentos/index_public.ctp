<div class="page-header">

<div class="col-md-2"></div>
<div class="col-md-8">
	<h3>Visualizar Procedimento</h3>
<table class="table table-striped">
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Preço</th>
	</tr>

	<?php foreach($procedimentos as $p): ?>
		<tr>
			<td><?= $p['Procedimento']['id']; ?></td>
			<td><?= $this->Html->link($p['Procedimento']['nome'],array('controller' => 'procedimentos', 'action' => 'view')); ?></td>
			<td><?= $p['Procedimento']['preco']; ?></td>


		</tr>
	<?php endforeach; ?>
</table>
</div>
<div class="col-md-2"></div>

<div class="row"></div>
<!--botao voltar-->
<?= $this->Html->link("Voltar", array('controller' => 'pages','action' => 'home'), array('class'=>'btn btn-default')); ?>
</div>