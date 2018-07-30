<?php 

/**
 * 
 */
class indexController extends Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->view->render('index');
	}

	public function store(){
		$proceso=$this->loadModel('index');
		$data=$proceso->store('reynaldo','11111111');
	}
}