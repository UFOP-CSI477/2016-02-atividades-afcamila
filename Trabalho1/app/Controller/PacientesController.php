<?php


class PacientesController extends AppController{
	public $helpers = array('Html');

	public function index(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('pacientes', $this->Paciente->find('all', array('order'=>array('Paciente.nome'=>'asc') )));//atribuir a variavel um resultado

  }

  



  	public function view($id = null){

      if(!$id){
        throw new NotFoundException("Paciente Inválido!");

      }

      $paciente = $this->Paciente->findById($id);
      $this->set('pacientes',$pacientes); //estado é o nome da variavel que será atribuida la na frente

    }

    public function cadastrar($id = null){

      
        if($this->Paciente->save($this->request->data)){
          $this->redirect(array('controller' => 'pages','action' => 'home-pacientes'));
        }
      

    }

    public function index_login(){

    }

    public function validar(){

    $paciente = $this->Paciente->findAllByLoginAndSenha
      ($this->data['Paciente']['login'], $this->data['Paciente']['senha']);

    if(!empty($paciente))
      return $paciente;
    else
      return false;

  }

  public function login(){
    if(!empty($this->data['Paciente']['login'])){
      //validar
      $paciente = $this->validar();

      if($paciente != false){
        //$this->Flash->set('Acesso realizado com sucesso.');
        $this->Session->write('Paciente', $paciente);
        $this->Session->write('idpaciente', $paciente['id']);
        $this->redirect(array('controller' => 'pages','action' => 'home-pacientes'));
        exit();
      }
      else{
        $this->Flash->set('Paciente e/ou senha inválidos!');
        $this->redirect(array('action'=>'index_login'));
        exit();
      }
    }
    else{
      $this->redirect(array('action'=>'index_login'));
      exit();
    }
  }

  public function logout(){
    $this->Session->destroy();
    $this->redirect('/');
    exit();
  }


}