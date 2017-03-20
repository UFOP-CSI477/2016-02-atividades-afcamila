<?php

class UsuariosController extends AppController{
	public $helpers = array('Form');
	public $components = array('Flash');

	public function index_login(){

	}

	public function afterFilter(){
		if($this->action != 'index_login'){
			$this->autenticar();
		}
	}

	public function autenticar(){
		if(!$this->Session->check('Usuario')){
			$this->redirect(array('controller'=>'usuarios', 'action'=>'index_login'));
			exit();
		}
		else{
			$usuario = $this->Session->read('Usuario');
			$this->Flash->set('Seja bem-vindo(a) '.$usuario['0']['Usuario']['nome']);
		}
	}

	public function validar(){

		$usuario = $this->Usuario->findAllByLoginAndSenha
			($this->data['Usuario']['login'], $this->data['Usuario']['senha']);

		if(!empty($usuario))
			return $usuario;
		else
			return false;

	}

	public function login(){
		if(!empty($this->data['Usuario']['login'])){
			//validar
			$usuario = $this->validar();


			if($usuario != false){
				$this->Session->write('Usuario', $usuario);

				$teste = $this->Session->read('Usuario');
				$teste2 = $teste['0']['Usuario']['id'];
				
				if($teste2 == 1){				

					$this->redirect(array('controller' => 'pages','action' => 'home-admin'));
					
					exit();
				}
				else if($teste2 == 2){

					$this->redirect(array('controller' => 'pages','action' => 'home-operador'));
					
					exit();
				}
				
			}
			else{
				$this->Flash->set('Usuario e/ou senha inválidos!');
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
		$this->redirect(array('action'=>'index_login'));
		exit();
	}

}
