<div class="page-header">

<div class="col-md-2"></div>
<div class="col-md-8">
    <h3>Relatório</h3>

<table class="table table-striped">
    <tr>
    <th>Nome</th>
    <th>Preço</th>
    <th>Data</th>
   
    </tr>
<?php
$total = 0;
 
foreach($exames as $p):
    echo "<tr>";
    echo "<td>".$p['Procedimento']['nome']."</td>";
    echo "<td>".$p['Procedimento']['preco']." </td>";
    echo "<td>".$p['Exame']['data']. "</td>";
   
    echo "</tr>";
    $total = $total + $p['Procedimento']['preco'];
   
endforeach;
 
?>
 
   
<tr>
    <th></th>
    <th>Total: <?=$total?></th>
    <th></th>
   
    </tr>
</table>
</div>
<div class="col-md-2"></div>

<div class="row"></div>
<!--botao voltar-->
<?= $this->Html->link("Voltar", array('controller' => 'pages','action' => 'home'), array('class'=>'btn btn-default')); ?>
</div>