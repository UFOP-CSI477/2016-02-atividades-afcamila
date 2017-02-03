<?php


	class Exame extends AppModel{
		public $belongsTo = 'Procedimento';

		/*public $belongsTo = array('Paciente'=>array
			('className'=>'Paciente', 'foreignKey'=>'paciente_id'),
			'Procedimento'=>array
			('className'=>'Procedimento', 'foreignKey'=>'procedimento_id'));
			*/

	}

