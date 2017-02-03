

<div class="page-header">

<div class="col-md-4"></div>
<div class="col-md-4">
<h3>Paciente</h3>

<?php

echo $this->Form->create('Paciente', array('controller'=> 'pacientes', 'url'=>'login'), array('class'=>'form-group'));
echo $this->Form->input('login', array('class'=>'form-control'));
echo $this->Form->password('senha', array('class'=>'form-control'));
echo $this->Form->end('Acessar', array('class'=>'btn btn-default'));

?>

</div>

<div class="col-md-4"></div>

</div>
<div class="row"></div>
<!--botao voltar-->
<?= $this->Html->link("Voltar", array('controller' => 'pages','action' => 'home'), array('class'=>'btn btn-default')); ?>
</div>