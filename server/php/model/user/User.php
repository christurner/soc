<?php

class User
{
	public $id;
	public $email;
	public $name;
	
	public function __construct() 
	{
		$this->id = 0;
		$this->email = "";
		$this->name = "";
    }

}


?>