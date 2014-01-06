<?php

include_once("UserDao.php");

class UserDelegate
{
	public function __construct() 
	{
		
    }
	
	public function save($user)
	{
		$userDao = new UserDao();
		$user = $userDao->save($user);
			
		return $user;
	}
	
	public function getAllUsers()
	{
		$userDao = new UserDao();
		return $userDao->getAllUsers();
	}
	
	public function getUserById($userId)
	{
		$userDao = new UserDao();
		return $userDao->getUserById($userId);
	}
	
	public function delete($user)
	{
		$userDao = new UserDao();
		return $userDao->delete($user);
	}
	

}

?>