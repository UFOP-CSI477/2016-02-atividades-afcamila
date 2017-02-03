<h1>Editar Exame</h1>

<?php

echo $this->Form->create('Exame');
echo $this->Form->input('paciente_id', $paciente);
echo $this->Form->input('procedimento_id', $procedimentos);
echo $this->Form->date('data');
echo $this->Form->end('Salvar');

?>