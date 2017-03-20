
   <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="col-lg-3">
                    <?= $this->Html->link("Meus Exames", array('controller' => 'exames','action' => 'index'), array('class'=>'btn btn-default')); ?>
                </div>
                

                <div class="col-lg-3">
                    <?= $this->Html->link("Agendar Exame", array('controller' => 'exames','action' => 'add'), array('class'=>'btn btn-default')); ?>
                </div>


                <div class="col-lg-3">
                    <?= $this->Html->link("Relatório", array('controller' => 'exames','action' => 'relatorio_procedimentos'), array('class'=>'btn btn-default')); ?>
                </div>

                <div class="col-lg-3">
                    <?= $this->Html->link("Sair", array('controller' => 'pacientes','action' => 'logout'), array('class'=>'btn btn-default')); ?>
                </div>
                    


                </div>
            </div>
        </div>
    </section>


