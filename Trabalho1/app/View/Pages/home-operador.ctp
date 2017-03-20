


   <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?= $this->Html->link("Ver Exames", array('controller' => 'exames','action' => 'index'), array('class'=>'btn btn-default')); ?>

                    <?= $this->Html->link("Editar Procedimentos", array('controller' => 'procedimentos','action' => 'index_operador'), array('class'=>'btn btn-default')); ?>


                    <?= $this->Html->link("Sair", array('controller' => 'pacientes','action' => 'logout'), array('class'=>'btn btn-default')); ?>

                </div>
            </div>
        </div>
    </section>


