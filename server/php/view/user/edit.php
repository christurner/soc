<?php
	
	include_once("../../controller/UserController.php");
	
	if(isset($_GET["action"]))
	{
		$controller = new UserController();

		switch($_GET["action"])
		{
			case "save":						
				$controller->saveGet();				
				echo "saved";
			break;
		}
		
	}
	else
	{
		echo "no action here";
		exit;
	}


?>
