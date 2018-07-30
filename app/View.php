<?php 
/**
 * 
 */
class View
{
	
	public function __construct(Request $r)
	{
		$this->controller=$r->getController();
	}

	public function render($view){
		$pathView=ROOT.'views'.DS.$this->controller.DS.$view.'.php';
		//echo $pathView;exit;
		if(is_readable($pathView)){

			if($this->controller=='index'){
				require_once ROOT.'views'.DS.'layout'.DS.'header.php';
				require_once $pathView;
				require_once ROOT.'views'.DS.'layout'.DS.'footer.php';
			}
		}else{
			echo 'Error de vista';
		}
	}
}