<?php
	if(!isset($_SESSION['users']))
			session_start();
			
	echo "hello world<br>";
	
	if(isset($_GET["action"]) && $_GET["action"])
	{
		$action = $_GET["action"];
		switch($action)
		{
			case "clearSession":
				echo "clear session<br>";
				if(isset($_SESSION['users']))
				{
					$_SESSION['users'] = array();					
				}
				
				echo "users count: ".count($_SESSION['users'])."<br>";
			break;
		}
		
		echo "<br>action: ".$action."<br>";
	}
	else
	{
		echo "<br>no action<br>";
	}


?>