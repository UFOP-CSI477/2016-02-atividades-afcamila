
<?php

//trabalhar sempre com plural e controller

class ProcedimentosController extends AppController{

  public $helpers = array('Html', 'Form'); //auxila na parte de view
  public $components = array('Flash');

  public function index(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('procedimentos', $this->Procedimento->find('all', array('order'=>array('Procedimento.nome'=>'asc') )));//atribuir a variavel um resultado

  }

  public function index_public(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('procedimentos', $this->Procedimento->find('all', array('order'=>array('Procedimento.nome'=>'asc') )));//atribuir a variavel um resultado

  }

  public function index_operador(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('procedimentos', $this->Procedimento->find('all', array('order'=>array('Procedimento.nome'=>'asc') )));//atribuir a variavel um resultado

  }

  public function view($id = null){

    if(!$id){
      throw new NotFoundException("Procedimento Inválido!");

    }

    $procedimento = $this->Procedimento->findById($id);
    $this->set('procedimentos',$procedimento); //estado é o nome da variavel que será atribuida la na frente

  }

  public function add(){

    if(empty($this->request->data)){

      $usuarios =$this->Procedimento->Usuario->find('list', array('fields'=>array('id','nome')));

      $this->set('usuarios', $usuarios);

    }else{
      if($this->Procedimento->save($this->request->data)){
        $this->Flash->set('Procedimento inserido com sucesso.');
        $this->redirect(array('action' => 'index'));
      }
    }


  }


  public function edit($id=null){

    if(!$id){
      throw new NotFoundException("Procedimento inválido.");
      
    }

    if(empty($this->request->data)){

      $usuarios =$this->Procedimento->Usuario->find('list', array('fields'=>array('id','nome')));

      $this->set('usuarios', $usuarios);

      $this->request->data = $this->Procedimento->findById($id);

    }else{

      if($this->Procedimento->save($this->request->data)){
        $this->Flash->set('Procedimento atualizado com sucesso.');
        $this->redirect(array('action' => 'index'));
      }

    }

  }

  public function edit_preco($id=null){
      if(!$id){
        throw new NotFoundException("Procedimento Inválido!");
      }
      if (empty($this->request->data)){
        //data esta vazio -> carregar campos para edição

        //Carregar os estados - combo
        //dentro de cidades tenho relação c o modlo de estados
        $usuarios  = $this->Procedimento->Usuario->find('list',array('fields'=> array('id','nome')));

        $this->set('usuarios',$usuarios);
        //carregar os dados atuais
        $this->request->data = $this->Procedimento->findById($id);
      }else {
        //persistir os dados
        if($this->Procedimento->save($this->request->data)){
          $this->Flash->set('Procedimento atualizado com sucesso!');
          $this->redirect(array('action' => 'index'));
        }
      }
    }

  public function delete($id=null){

    if(!$id){
      throw new NotFoundException("Procedimento inválido."); 
    }


    $this->Procedimento->delete($id);
    $this->Flash->set('Procedimento excluído com sucesso.');
    $this->redirect(array('action' => 'index'));

  }


}