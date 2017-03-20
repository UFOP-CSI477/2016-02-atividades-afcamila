
   <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?= $this->Html->link("Ver Procedimentos", array('controller' => 'procedimentos','action' => 'index'), array('class'=>'btn btn-default')); ?>

                    <?= $this->Html->link("Cadastrar Procedimento", array('controller' => 'procedimentos','action' => 'add'), array('class'=>'btn btn-default')); ?>

                    <?= $this->Html->link("Sair", array('controller' => 'pacientes','action' => 'logout'), array('class'=>'btn btn-default')); ?>
                </div>
            </div>
        </div>
    </section>


