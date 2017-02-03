
<div class="page-header">

<div class="col-md-2"></div>
<div class="col-md-8">
<h3>Editar Procedimento</h3>

<?php

echo $this->Form->create('Procedimento', array('class'=>'form-group'));
echo $this->Form->input('id');
echo $this->Form->input('preco', array('class'=>'form-control'));
echo $this->Form->select('usuario_id', $usuarios, array('class'=>'form-control'));
echo $this->Form->end('Salvar', array('class'=>'btn btn-default'));

?>

</div>

<div class="col-md-2"></div>

</div>
