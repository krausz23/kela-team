<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST')
{  //ha nem POST
    header ('Location: login.php');//eliranyitjuk
}	


if($_POST['submit'])
{
	include('db_connection.php');

	$username = $_POST['username'];
	$password = $_POST['password']; //md5- kivettem 
	$password_r =  $_POST['password_r'];
	$email = $_POST['email']; 
	//$dateOfBirth = $_POST['']; 
	//$iYear = $_POST['year'];
	//$iMounth = $_POST['mounth'];
	//$iDay = $_POST['day'];
	//$gender = $_POST[''];

	if($username && $email && $password && $password_r)
	{
		// nevet nem ellenoriztem, majd ha lessz idom
		if($password == $password_r)
		{
			if(preg_match("/^([-a-z0-9_]|\\-|\\.)+@(([-a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$/", $email))
			{
				$query = mysql_query("SELECT * FROM kela_users WHERE email = '$email' ");
				// echo "queri :"."$query";
				$rows = mysql_num_rows($query);

				if($rows == 0)
				{
					if(preg_match('/^[0-9a-zA-Z]+$/', $_POST['password']))
					{
						 mysql_query("INSERT INTO kela_users (email,password,user_name) VALUES ('$email','$password','$username') ") or die(mysql_error());
						 echo "Registration Succesfully";
						 header('Location:login.php');
					}else
						echo "Password is not correct!";
				}else
					echo "This email adress is existing, please choose an another!";
			}
		}else
			echo "Incorrect password!";

	}else
		echo "All fields have print!";

}//if post	
 else
 	header('Location:login.php');		
?>