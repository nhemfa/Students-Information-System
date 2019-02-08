<?php
 
 if(isset($_POST))
 	{
 		$data = array("username"=> $_POST["username"],
 					  "password"=>$_POST["password"],
 					  "email"=>$_POST["email"]);
 		echo json_encode($data);
 	}