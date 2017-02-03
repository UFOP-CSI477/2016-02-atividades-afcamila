<h1>Delete Procedimento</h1>

<?php

echo $this->Form->create('Procedimento');
echo $this->Form->input('id');
echo $this->Form->input('nome');
echo $this->Form->input('preco');
echo $this->Form->select('usuario_id', $usuarios);
echo $this->Form->end('Salvar');

?>