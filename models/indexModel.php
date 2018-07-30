<?php 

/**
 * 
 */
class indexModel extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function store($empleado,$dni){

		$query=$this->db->prepare('CALL utb_Empleado("'.$empleado.'","'.$dni.'")');
		$query->execute();
	}


}