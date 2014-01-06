<?php

include_once("User.php");

class UserDao
{	
	public function __construct() 
	{
		if(!isset($_SESSION['users']) && count(isset($_SESSION['users'])) > 0 )
		{
			var_dump(isset($_SESSION['users']));exit;
			session_start();
			$_SESSION['users'] = array();
		}
		else
		{
			$_SESSION['users'] = array();
		}
			
    }
	
	public function save($user)
	{
		if($user->id > 0)
			$user = $this->update($user);
		else
			$user = $this->insert($user);
		return $user;
	}
	
	public function insert($user)
	{	
		$userCount = count($_SESSION['users']);
		$user->id = $userCount++;
		
		array_push($_SESSION['users'], $user);
	}
	
	public function getAllUsers()
	{
		if (isset($_SESSION['users'])) 
		{
			return $_SESSION['users'];
		}
		
		return array();
	}
	
	public function getUserById($userId)
	{
		$user = null;
		if (isset($_SESSION['users']))
		{
			$users = $_SESSION['users'];
			foreach($users as $user)
			{
				if($user->id == $userId)
				{
					break;
				}
			}	
		}
		
		return array($user);
	}
	
	public function update($user)
	{
		$users = $this->getAllUsers();
		foreach($users as $tempUser)
		{
			if($user->id == $tempUser->id)
			{
				$tempUser->email = $user->email;
				$tempUser->name = $user->name;
			}
		}
	}
	
	public function delete($user)
	{
		echo "userId: ".$user->id."<br>";
		for($i = 0; $i <= count($_SESSION['users']); $i++)
		{			
			echo "isset: ".isset($_SESSION['users'][$i])."<br>";
			if(isset($_SESSION['users'][$i]) && $_SESSION['users'][$i]->id == $user->id)
			{
				
				unset($_SESSION['users'][$i]);
				var_dump($i);
				break;
			}
		}
	}
		
	 

}

?>