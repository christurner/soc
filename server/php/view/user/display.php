<?php


	if(isset($_GET["action"]))
	{
		$userController = new UserController();
		
		switch($_GET["action"])
		{
			case "userById":
				$users = $userController->getUserById();
			break;
		}
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