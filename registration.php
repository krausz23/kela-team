<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<meta charset = "UTF-8" >
	<link rel= "stylesheet" type ="text/css" href="css/registration.css">

</head>

<body>
	<header>
		
		<form method="POST" action="registration_processing.php">
		<fieldset>
			<legend>Registration</legend>
			<div id="logoDiv">
				<table>
					<tr>
						<td><img src="img/Logo1.png"  id="logo"></td>
						<td><span id="titleText">Kela torrent</span></td>
					</tr>
				</table>
			</div>
			<div id="regDiv">
			<table>
				<tr>
					<td><label>Username:</label></td>
					<td><input type="text" name="username" required> </td>
				</tr>

				<tr>
					<td><label>Password:</label> </td>
					<td><input type="password" name="password" required></td>
				</tr><br>
				<tr>
					<td><label>Password repeat:</label> </td>
					<td><input type="password" name="password_r" required></td>
				</tr>
				<tr>
					<td><label>Email:</label></td>
					<td><input type="text" name="email" required> </td>
				</tr>
				<tr>
			</table>
			<table>
				<tr>
					<td><label>Gender:</label></td>
					<td> <input type="radio" id="radio_btn_male" value="Male" name="sex"> Male   </td>
					<td> <input type="radio" id="radio_btn_famale" value="Famale" name="sex"> Female    </td>					
				</tr>

			</table>
			
			<input type="checkbox" name="term" value="term" id="checkbox">I accepted all terms!
			<div id="sub">
				<td><input type="submit" value="Registration" name="submit"> </td>
				<td><input type="button" value="Cancel" name="btn_cancel"></td>	
			</div>
			</div>
		</fieldset>
		</form>
	</header>




</body>
</html>