<?php 

abstract class Controller
{
	protected $view;
	abstract public function index();
	
	public function __construct()
	{
		$this->view=new View(new Request);
	}

	protected function loadModel($model){
		$model=$model.'Model';
		$pathModel=ROOT.'models'.DS.$model.'.php';

		if(is_readable($pathModel)){

			require_once $pathModel;
			$model=new $model;

			return $model;

		}else{
			echo 'Error de Modelo';
		}
	}
}