<?php

	include_once("../../controller/UserController.php");
	
	if(isset($_GET["action"]))
	{
		$userController = new UserController();
		
		switch($_GET["action"])
		{
			case "allUsers":
				$users = $userController->getAllUsers();				
			break;
		}
	}
	else
	{
		$users = $userController->getAllUsers();
	}

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