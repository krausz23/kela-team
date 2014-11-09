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
		<div>
			<!-- ************************************** Kategória kiválasztása ************************************ -->
			<h3>Upload</h3>
			<p>1. step: Choosing a category</p>
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
			<form id="musicUploadForm" name="musicUploadForm" action="music_upload.php" method="POST" enctype="multipart/form-data">

		
				<!-- ************************************** Torrent nevének megadása ************************************ -->   
			    <div class="">
				    <p>2. step: Torrent nevének megadása</p>
					<label for="torrentName">Torrent name:</label>
					<input type="text" name="torrentName" value="" maxlength="100" size="30">
			    </div>

			 	<!-- ************************************** Torrentfájl feltöltése ************************************ -->   
			 	<div>
			 		<p>3. step: Torrent file upload</p>
					<input type="file" name="torrentFile"  maxlength="100000">  
				</div>

				<!-- ************************************** Leírás megadása ******************************************** -->
				<div>
				 	<p>4. step: Describe</p>
				 	<label for="coverImage">Upload the cover image</label>
				 	<input type="file" name="coverImage"  maxlength="100000">

				 	<br>
				 	<label for="artist">Artist:</label>
					<input type="text" name="artist" value="" maxlength="100" size="30">
				    
				    <br>
				 	<label for="album">Album:</label>
					<input type="text" name="album" value="" maxlength="100" size="30">

				    <br>
				 	<label for="style">Style:</label>
					<input type="text" name="style" value="" maxlength="100" size="30">
				    
				    <br>
				 	<label for="format">Format:</label>
					<input type="text" name="format" value="" maxlength="100" size="30">

					<br>
				 	<label for="bitrate">Bitrate:</label>
					<input type="text" name="bitrate" value="" maxlength="100" size="30">

				    <br>
				    <label for="description" >Description:</label>
					<textarea class="szoveg" cols="30" rows="10" name="description"></textarea>
						
				</div>

				<!-- ************************************ Feltételek elfogadása *************************************** -->
				<p>5. step: Feltételek elfogadása</p>
			    <label for="conditions">Elfogadom az oldal használatának feltételeit:</label>
			    <input type="checkbox" name="conditions" value="1">

			    <!-- ****************************************** Gombok ********************************************* -->
			    <br>
			    <br>
			    <input class="" type="reset" name=reset value="Clear">
			    <input class="" type="submit" name=go value="Send">
    		</form>
    	</div>

	    <div id="movieUploadDiv">
	    	<form id="movieUploadForm" name="movieUploadForm" action="action.php" method="POST" enctype="multipart/form-data">
	    			<div class="">
	    				
	    				<h3>2. step: Torrent nevének megadása</h3>
	    				<table>
	    					<tr>
	    						<th><label for="torrentName">Torrent name:</label></th>
	    						<td><input type="text" name="torrentName" value="" maxlength="100" size="30"></td>
	    					</tr>
	    				</table>
	    				<h3>3. step: Torrent file upload</h3>
	    				<table>
	    					<tr>
	    						<td><input type="file" name="torrentFile"  maxlength="100000"></td>
	    					</tr>
	    				</table>
	    				<h3>4. step: Describe</h3>
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