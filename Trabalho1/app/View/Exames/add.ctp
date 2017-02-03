

<div class="page-header">

<div class="col-md-2"></div>
<div class="col-md-8">
<h3>Agendar Exame</h3>

<?php

echo $this->Form->create('Exame', array('class'=>'form-group'));
echo $this->Form->hidden('paciente_id', array('value'=>$paciente));
echo $this->Form->input('procedimento_id', array('class'=>'form-control'));
echo $this->Form->date('data', array('class'=>'form-control'));
echo $this->Form->end('Salvar', array('class'=>'btn btn-default'));

?>

</div>

<div class="col-md-2"></div>

</div>