<!--<span class="notice success">
	<?= $this->Html->link("Procedimentos", array('controller'=>'procedimentos', 'action'=>'index')); ?>
</span>

<span class="notice success">
	<?= $this->Html->link("Pacientes", array('controller'=>'pacientes', 'action'=>'index')); ?>
</span>


<span class="notice success">
	<?= $this->Html->link("Exames", array('controller'=>'exames', 'action'=>'index')); ?>
</span>

-->

<!--botao sair-->

<!--<?= $this->Html->link("sair", array('controller' => 'usuarios','action' => 'logout')); ?>-->


    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1>Pacientes</h1>
                    <p>Registre-se e marque seus exames online.</p>
                    <?= $this->Html->link("Registre-se", array('controller' => 'pacientes','action' => 'cadastrar'), array('class'=>'btn btn-default')); ?>
                </div>
                <div class="col-lg-3">
                    <h1>Procedimentos</h1>
                    <p>Veja aqui quais são os nossos procedimentos.</p>
                    <?= $this->Html->link("Procedimentos", array('controller' => 'procedimentos','action' => 'index_public'), array('class'=>'btn btn-default')); ?>
                </div>
                <div class="col-lg-3">
                    <h1>Usuários</h1>
                    <p>Faça login agora.</p>
                    <?= $this->Html->link("Usuário", array('controller' => 'usuarios','action' => 'index_login'), array('class'=>'btn btn-default')); ?>
                </div>
                <div class="col-lg-3">
                    <h1>Pacientes</h1>
                    <p>Faça login agora.</p>
                    <?= $this->Html->link("Pacientes", array('controller' => 'pacientes','action' => 'index_login'), array('class'=>'btn btn-default')); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Sobre</h1>
                </div>
            </div>
        </div>
    </section>
