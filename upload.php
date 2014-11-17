<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload page</title>
	<meta charset = "UTF-8" >
	<link rel= "stylesheet" type ="text/css" href="css/index.css">
	<script src="js/upload.js"></script>
	<script src="lib/jquery/jquery-2.1.1.min.js"></script>
</head>

	<body>
		<header>

		<div id="headerDiv"> 
		
		<div id="logoDiv">	
				<img src="img/Logo1.png"  id="logo">
				<span id="titleText">Kela torrent</span>
		</div>

		<ul id="nav">
			<li>
				<a href="index.php" >Home</a>
			</li>
				
			<li>
				<a href="download.php" >Download</a>
			</li>

			<li>
				<a href="upload.php" >Upload</a>
			</li>				

			<li>
				<a href="rules.php" >Rules</a>
			</li>
		</ul>
	</div>
	</header>


	<!-- ****************************************** Zenefeltöltő form ********************************************* -->

	<div id="uploadHolderDiv">
		<div id="categorySelectDiv">
			<!-- ************************************** Kategória kiválasztása ************************************ -->
			<h3 id="uploadTitle">Upload</h3>
			<p class="centerText stepsText">1. step: Choosing a category</p>
			<label for="categorySelect">In which category do you want to upload</label>
			<select name="categorySelect" id="categorySelect">
				<option value="Default" >Choose!</option>
				<option value="music" >Music</option>
				<option value="film">Movie</option>
				<option value="pictures">Pictures</option>
				<option value="program">Program</option>
			</select>
		</div>

		<div id="musicUploadDiv">
			<form id="musicUploadForm" name="musicUploadForm" method="POST" enctype="multipart/form-data">
		
				<!-- ************************************** Torrent nevének megadása ************************************ -->   
			    <div class="">
				    <p class="centerText stepsText">2. step: Torrent nevének megadása</p>
					<label for="torrentName">
						<span class="uploadTextBlock">Torrent name:</span>
						<input class="torrentName" type="text" name="torrentName" value="" maxlength="100" size="30"><span class="torrentNameError"></span>
					</label>
			    </div>

			 	<!-- ************************************** Torrentfájl feltöltése ************************************ -->   
			 	<div>
			 		<p class="centerText stepsText">3. step: Torrent file upload</p>
					<input type="file" name="torrentFile"  maxlength="100000"><span id="torrentFileError"></span>
				</div>

				<!-- ************************************** Leírás megadása ******************************************** -->
				<div>
				 	<p class="centerText stepsText">4. step: Describe</p>
				 	<label for="coverImage">
				 		<span class="uploadTextBlock">Upload the cover image</span>
				 		<input type="file" name="coverImage"  maxlength="100000"><span id="coverImageError"></span>
				 	</label>
				 	

				 	<br>
				 	<label for="artist">
				 		<span class="uploadTextBlock">Artist:</span>
				 		<input type="text" name="artist" value="" maxlength="100" size="30"><span id="artistError"></span>
				 	</label>
					
				    
				    <br>
				 	<label for="album">
				 		<span class="uploadTextBlock">Album:</span>
				 		<input type="text" name="album" value="" maxlength="100" size="30"><span id="albumError"></span>
				 	</label>
					

				    <br>
				 	<label for="style">
				 		<span class="uploadTextBlock">Style:</span>
				 		<input type="text" name="style" value="" maxlength="100" size="30"><span id="styleError"></span>
				 	</label>
					
				    
				    <br>
				 	<label for="format">
				 		<span class="uploadTextBlock">Format:</span>
				 		<input type="text" name="format" value="" maxlength="100" size="30"><span id="formatError"></span>
				 	</label>
					

					<br>
				 	<label for="bitrate">
				 		<span class="uploadTextBlock">Bitrate:</span>
				 		<input type="text" name="bitrate" value="" maxlength="100" size="30"><span id="bitrateError"></span>
				 	</label>
					

				    <br>
				    <label for="description" >
				    	<span class="uploadTextBlock">Description:</span>
				    	<textarea id="descriptionTextarea" class="szoveg" cols="30" rows="10" name="description"></textarea><span id="descriptionError"></span>
				    </label>
					
						
				</div>

				<!-- ************************************ Feltételek elfogadása *************************************** -->
				<p class="centerText stepsText">5. step: Feltételek elfogadása</p>
			    <label for="conditions"><input class="termsBox" type="checkbox" name="conditions" value="1"><span >Elfogadom az oldal használatának feltételeit</span><span id="conditionsError"></span></label>
			    

			    <!-- ****************************************** Gombok ********************************************* -->
			    <br>
			    <br>
			    <input class="button" type="reset" name=reset value="Clear">
			    <input id="submitButton" class="button" type="submit" name=go value="Send">
    		</form>
    	</div>

	    <div id="movieUploadDiv">
	    	<form id="movieUploadForm" name="movieUploadForm" action="action.php" method="POST" enctype="multipart/form-data">
	    			<div class="">
	    				
	    				<p class="centerText stepsText">2. step: Torrent nevének megadása</p>
	    				<table>
	    					<tr>
	    						<th><label for="torrentName">Torrent name:</label></th>
	    						<td><input class="torrentName" type="text" name="torrentName" value="" maxlength="100" size="30"></td><span class="torrentNameError"></span>
	    					</tr>
	    				</table>
	    				<p class="centerText stepsText">3. step: Torrent file upload</p>
	    				<table>
	    					<tr>
	    						<td><input type="file" name="torrentFile"  maxlength="100000"></td>
	    					</tr>
	    				</table>
	    				<p class="centerText stepsText">4. step: Describe</p>
	    				<table>
	    					<tr>
	    						<th><label for="coverImage">Upload the cover image</label></th>
	    						<td><input type="file" name="coverImage"  maxlength="100000"></td>
	    					</tr>
	    					<tr>
	    						<th><label for="artist">Artist:</label></th>
	    						<td><input type="text" name="artist" value="" maxlength="100" size="30"></td>
	    					</tr>
	    					<tr>
	    						<th><label for="album">Album:</label></th>
	    						<td><input type="text" name="album" value="" maxlength="100" size="30"></td>
	    					</tr>
	    					<tr>
	    						<th><label for="album">Album:</label></th>
	    						<td><input type="text" name="artist" value="" maxlength="100" size="30"></td>
	    					</tr>
	    				</table>
	    			</div>
	    	</form>
	    </div>
    </div>
    <script type="text/javascript" src="lib/jquery/jquery-2.1.1.min.js"></script>
    <script src="js/upload.js" ></script>
	</body>
</html>