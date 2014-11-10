<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset = "UTF-8" >
	<link rel= "stylesheet" type ="text/css" href="css/login.css">

</head>

<body>
	<header>
		<style>
			body {
				background-image: url("img/gradient_bg.png");
			}
		</style>
		<form method="POST" action="login_processing.php">
		<fieldset>
			<legend>Login</legend>

			<div id="headerDiv1">
								
						<div id="headerDiv2">

							<table>

								<tr>
									<td><label>Username:</label></td>
									<td><input type="text" name="username"> </td>
								</tr>

								<tr>
									<td><label>Password:</label> </td>
									<td><input type="password" name="password" required></td>
								</tr>						
							</table>

							<span id="login-box-options">	
								<input type="checkbox" name="1" value="1"> Remember Me

								<a link rel="stylesheet" style="margin-left:100px;" href="#">Forgot password?</a>

							</span>	

						</div>	

					<div id="headerDiv3">
						<input type="image" src="login2.png" id="btn_submit" value="Login" name="submit"  width="70" height="48">
						<input type="image" src="clear.png" id="btn_clear" value="Clear" width="70" height="48">
					</div>
				
				</div>
					<div id="headerDiv4">
						<a link rel="stylesheet"  href="registration.php">Registration</a>
					</div>
			</fieldset>
		</form>
		</header>

	</body>
	</html>