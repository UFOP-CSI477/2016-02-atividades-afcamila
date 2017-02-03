

<div class="page-header">

<div class="col-md-2"></div>
<div class="col-md-8">
<h3>Cadastrar Paciente</h3>

<?php

echo $this->Form->create('Paciente', array('class'=>'form-group'));
echo $this->Form->input('nome', array('class'=>'form-control'));
echo $this->Form->input('login', array('class'=>'form-control'));
echo $this->Form->input('senha', array('class'=>'form-control'));
echo $this->Form->end('Salvar', array('class'=>'btn btn-default'));

?>

</div>

<div class="col-md-2"></div>

</div>