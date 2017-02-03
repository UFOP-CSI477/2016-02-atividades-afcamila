<?php


class AdministradorsController extends AppController{
	public $helpers = array('Html');

	public function index(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('administradors', $this->Administrador->find('all', array('order'=>array('nome'=>'asc') )));//atribuir a variavel um resultado

  	}

  	public function view($id = null){

    if(!$id){
      throw new NotFoundException("Administrador Inválido!");

    }

    $administrador = $this->Administrador->findById($id);
    $this->set('administradors',$administrador); //estado é o nome da variavel que será atribuida la na frente

  }

}