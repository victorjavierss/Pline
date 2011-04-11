<?php
class Projects_Controller extends Wisdom_Controller{

	public function display(){
		$model = $this->getModel();

		$headers = $model->getFields();

		$select =$model->getSelect()
						->innerJoin('usuario', 'usuario.id_usuario=proyecto.responsable');
				
echo $select;				
		
		$projects = $model->fetchAll($select);
		
		var_dump($projects);

		$this->setViewVar('titles', $headers);

	}

}
?>