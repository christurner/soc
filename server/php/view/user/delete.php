<?php

	include_once("../../controller/UserController.php");

	$userController = new UserController();
	
	$userController->delete();
	$users = $userController->getAllUsers();
	
	if($users)
	{
		foreach($users as $user)
		{
			echo "id: ".$user->id."<br>";
			echo "email: ".$user->email."<br>";
			echo "name: ".$user->name."<br>";
			echo "<br>";
		}	
	}
	
?>