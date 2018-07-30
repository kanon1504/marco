<?php 

class Bootstrap
{
	
	public static function run(Request $r)
	{
		$controller=$r->getController().'Controller';
		$method=$r->getMethod();
		$arguments=$r->getArguments();

		$pathController=ROOT.'controllers'.DS.$controller.'.php';

		if(is_readable($pathController)){

			require_once $pathController;
			$controller=new $controller;

			if(is_callable(array($controller,$method))){
				$method=$r->getMethod();
			}else{
				$method='index';
			}


			if(isset($arguments)){
				call_user_func_array(array($controller,$method), $arguments);
			}else{
				call_user_func($controller,$method);
			}
		}else{
			echo 'No Existe Controlador';
		}

	}
}