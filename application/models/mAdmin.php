mAdmin<?php 

class MAdmin extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name'] 	= 'admin';
		$this->data['primary_key']	= 'NIPUS';
	}
}