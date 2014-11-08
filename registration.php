<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<meta charset = "UTF-8" >
	<link rel= "stylesheet" type ="text/css" href="css/registration.css">

</head>

<body>
	<header>
		<style>
			body {
				background-image: url("img/gradient_bg.png");
			}
		</style>
		
		<form method="POST" action="registration_processing.php">
		<fieldset>
			<legend>Registration</legend>
			
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
					<td><label>Date of birth:</label></td>
					<td> <select id="year" name="year" > 

						<option value="year_val"  selected>Year</option>
						<option value="year" >1990</option>
						<option value="year">1991</option>
						<option value="year">1992</option>
						<option value="year">1993</option></select>    </td>


						<td> <select id="year" name="mounth" > 

							<option value="month_val"  selected>Month</option>
							<option value="month" >January</option>
							<option value="month">February</option>
							<option value="month">March</option>
							<option value="month">April</option>
							<option value="month" >May</option>
							<option value="month">June</option>
							<option value="month">July</option>
							<option value="month">August</option>
							<option value="month" >September</option>
							<option value="month">October</option>
							<option value="month">November</option>
							<option value="month">December</option></select></td>
							
							<td><select id="day" name="day" > 

								<option value="day_val"  selected>Day</option>
								<option value="e">01</option>
								<option value="e">02</option>
								<option value="e">03</option>
								<option value="e">04</option>
								<option value="e">05</option>
								<option value="e">06</option>
								<option value="e">07</option>
								<option value="e">08</option>
								<option value="e">09</option>
								<option value="e">10</option>
								<option value="e">11</option>
								<option value="e">12</option>
								<option value="e">13</option>
								<option value="e">14</option>
								<option value="e">15</option>
								<option value="e">16</option>
								<option value="e">17</option>
								<option value="e">18</option>
								<option value="e">19</option>
								<option value="e">20</option>
								<option value="e">21</option>
								<option value="e">22</option>
								<option value="e">23</option>
								<option value="e">24</option>
								<option value="e">25</option>
								<option value="e">26</option>
								<option value="e">27</option>
								<option value="e">28</option>
								<option value="e">29</option>
								<option value="e">30</option>
								<option value="e">31</option></select>      </td>
							</tr>


							<tr>
								<td><label>Gender:</label></td>
								<td> <input type="radio" id="radio_btn_male" value="Male" > Male   </td>
								<td> <input type="radio" id="radio_btn_famale" value="Famale" > Famale    </td>					
							</tr>

						</table>

						<div class="sub">
							<table>	
								<tr>	
									<td><input type="button" value="Cancel"></td>
									<td><input type="submit" value="Registration" name="submit"> </td>
								</tr>
							</table>		
						</div>	
					</fieldset>
					</form>
				</header>




			</body>
			</html>