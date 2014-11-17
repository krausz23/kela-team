<?php
	//igy futtasuk : http://localhost/torrentSite/login.php
	if(isset($_POST['submit']))
	{
		session_start();
		include('db_connection.php');
		header('Content-type: text/plain; charset=utf-8');


		$user_name = $_POST['username'];
		$password =  $_POST['password'];


		if($user_name && $password)
		{

			$sql = mysql_query("SELECT * FROM kela_users WHERE user_name='$user_name' and password='$password'");
			$row = mysql_num_rows($sql); // Mind 0-t ad vissza :-?? 			

			//echo "Talalatok: "."$row";

			if($row == 1)
			{
				// HA IDE BELÉPUNK akkor sikeres a belepes !!!

				//ellenorzzuk ha benne van az adatbazisban!
				$sql = "SELECT user_name FROM kela_users WHERE ( user_name='".$user_name."')";
				$query = mysql_query($sql);
				$result = mysql_fetch_array($query); 

				//print_r($result); echo "echo"."$result[0]"; // Elenoriztem, ha oke !?
				

				$_SESSION['username'] = $result[0];
				header('Location:index.php');

			}else
				die(header('Location: login.php'));

		}else
			echo "Existing epmty field!";

	}else
		header('Location:login.php');
?>