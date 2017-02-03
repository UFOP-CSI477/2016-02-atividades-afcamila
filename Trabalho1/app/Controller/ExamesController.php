
<?php

//trabalhar sempre com plural e controller

class ExamesController extends AppController{

  public $helpers = array('Html', 'Form'); //auxila na parte de view
  public $components = array('Flash');

  public function index(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('exames', $this->Exame->find('all', array('Exame')));//atribuir a variavel um resultado

  }

  public function view($id = null){

    if(!$id){
      throw new NotFoundException("Exame Inválido!");

    }

    $Exame = $this->Exame->findById($id);
    $this->set('exames',$Exame); //estado é o nome da variavel que será atribuida la na frente

  }

    public function add() {
 
        $this->loadModel("Paciente");
        if(empty($this->request->data)){

          $paciente = $this->Session->read('Paciente');
          $this->set('paciente', $paciente[0]['Paciente']['id']);
          $procedimentos = $this->Exame->Procedimento->find('list', array('fields'=>array('id','nome')));//Carregar combo de procedimentos
          $this->set('procedimentos', $procedimentos);
        }else{//persistir os dados
          if($this->Exame->save($this->request->data)){
          $this->Flash->set('Exame marcado com sucesso!');
          $this->redirect(array('action'=>'index'));
          }
        }
    }


  public function edit($id=null){

    if(!$id){
      throw new NotFoundException("Exame inválido.");
      
    }

    if(empty($this->request->data)){

      $procedimentos =$this->Exame->Procedimento->find('list', array('fields'=>array('id','nome')));

      $this->set('procedimentos', $procedimentos);

      $this->request->data = $this->Exame->findById($id);

    }else{

      if($this->Exame->save($this->request->data)){
        $this->Flash->set('Exame atualizado com sucesso.');
        $this->redirect(array('action' => 'index'));
      }

    }

  }

  public function delete($id=null){

    if(!$id){
      throw new NotFoundException("Exame inválido."); 
    }


    $this->Exame->delete($id);
    $this->Flash->set('Exame excluído com sucesso.');
    $this->redirect(array('action' => 'index'));

  }

  
   public function relatorio_procedimentos() {
        $paciente = $this->Session->read('Usuario');
        $this->loadModel("Exame");
        $exames = $this->Exame->findAllByPacienteId(array($paciente[0]['Paciente']['id']));
        $this->set('exames', $exames);
       
    }


}