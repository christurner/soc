<?php

include_once("../../model/user/UserDelegate.php");
include_once("../../model/user/User.php");

class UserController
{
	public function __construct() 
	{
		
    } 
	
	public function saveGet()
	{
		$user = new User();
		if(isset($_GET["id"]))
			$user->id = $_GET["id"];
		if(isset($_GET["email"]))
			$user->email = $_GET["email"];
		if(isset($_GET["name"]))
			$user->name = $_GET["name"];
		

		$userDelegate = new UserDelegate();
		$user = $userDelegate->save($user);
		
		return $user;
	}
	
	public function getAllUsers()
	{
		$userDelegate = new UserDelegate();
		$users = $userDelegate->getAllUsers();
		return $users;
	}
	
	public function getUserById()
	{
		$userDelegate = new UserDelegate();
		if(isset($_GET["id"]))
		{
			$users = $userDelegate->getUserById($userId);
		}
		
		return $users;
	}
	
	public function delete()
	{
		if(isset($_GET["id"]))
		{
			$userDelegate = new UserDelegate();
			$user = new User();
			$user->id = $_GET["id"];
			$userDelegate->delete($user);
		}
	}
	

}

?>