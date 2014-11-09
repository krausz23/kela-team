<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST')
{  //ha nem POST
    //header ('Location: login.php');//eliranyitjuk
	echo "Nem post !";
}	

	// Zene feltotles


if(isset($_FILES['torrentFile']) && isset($_FILES['coverImage']) )
{
	 include('db_connection.php');


	$torrent_name = $_POST['torrentName']; //amit a felhasznalo beir kezzel
	$artist_name = $_POST['artist'];
	$albume_name = $_POST['album'];
	$style = $_POST['style'];
	$format = $_POST['format'];
	$bitrate = $_POST['bitrate'];
	$description = $_POST['description'];
	
	/************************** User Id lekérése *****************/

	//$uploaded_userId =  		//get_current_user(); // ez kiirja: Krausz
	//VAGY
	//$uploaded_userId = $_SESSION['id'];
	//$format = $_POST['']; // ezt hol kerem le ?

	/************************** Idö lekérése *****************/
	$uploaded_date = date('Y-m-d H:i:s',time()); 

	/************ Kep betoltese *****************************/

	 $coverImage_name = $_FILES["coverImage"]["name"] ;
	 $coverImage_size = ($_FILES["coverImage"]["size"] / 1024);
	 $coverImage_file_type = $_FILES["coverImage"]["type"];
	 $coverImage_file_stored = $_FILES["coverImage"]["tmp_name"];

	 $coverImage_temp = explode(".", $_FILES["coverImage"]["name"]);
	 $coverImage_allowedExts = array("gif","jpeg","jpg","pjpeg","x-png","png");
	 $coverImage_extension = end($coverImage_temp);

	 if($coverImage_name == "")
	 {
	 	echo "Not selected cover Image!";
	 	die();
	 }

	 if(in_array($coverImage_extension,  $coverImage_allowedExts))
	 {
	 	$coverImage_target = "uploadFolder/music/coverImage/";
	 	$coverImage_target = $coverImage_target . basename($_FILES['coverImage']['name']);
	 

	 	if(move_uploaded_file($_FILES['coverImage']['tmp_name'], $coverImage_target))
	 	{
	 		echo "The cover photo succesfully upload!";

	 	}else{
	 		echo "Cover image upload faild!";	
	 	}
	 }else
	 	echo "Not Picture !";

	/************ Torrent file betoltese *************************/
	 $file_name = $_FILES["torrentFile"]["name"] ;
	 $file_size = ($_FILES["torrentFile"]["size"] / 1024);
	 $file_type = $_FILES["torrentFile"]["type"];
	 $file_stored = $_FILES["torrentFile"]["tmp_name"];


	 $temp = explode(".", $_FILES["torrentFile"]["name"]);
	 $allowedExts = array("torrent"); //kiterjesztese otorrent kell legyen !
	 $extension = end($temp);

	 if($file_name == "" )
	 {
	 	echo "Not selected torrent file!";
	 	die();
	 }

	 if(in_array($extension, $allowedExts))
	 {
	 	$target = "uploadFolder/music/"; // elérési út,hogy hova mentse
	 	$target = $target . basename($_FILES['torrentFile']['name']);

	 	if(move_uploaded_file($_FILES['torrentFile']['tmp_name'], $target ))
	 	{
	 		echo  "A feltoltes sikeresen megtortent !". "<br><br>";
			echo "File: ". basename($_FILES['torrentFile']['name']) ." <br>"; //db-ben ez a neve : torrent_file	
			echo "Upload: "."$file_name". "<br>";
			echo "Size: " ."$file_size " . "Kb" . "<br>";
			echo "Type: "."$file_type ". "<br>";
			echo "Stored in:"."$file_stored". "<br>";	

			/********************************************** Feltoltes adatbazisba,elotte kiiraom hogy lassam *****************************************/
			echo "<br>";
			echo "torrent_name : ". "$torrent_name"."<br>";
			echo "artist_name : "."$artist_name "."<br>";
			echo "albume_name :"."$albume_name"."<br>";
			echo "style :"."$style"."<br>";
			echo "Format : "."$format"."<br>";
			echo "Bitarte :"."$bitrate"."<br>";
			echo "Description: "."$description"."<br>";
			echo "uploaded_date"."$uploaded_date"."<br>";
			echo "UserId : "."Meg eggyelore semmi "."<br>";
			echo "CoverImage :". basename($_FILES['coverImage']['name']) ."<br>";
			echo "CoverImage target :"."$coverImage_target"."<br>";


			//mysql_query("INSERT INTO kela_music (torrent_name,artist_name,albume_name,uploaded_userId,style,torrent_file,description,size,cover_img,format,bitrate,uploaded_date,) VALUES ('$email','$password','$username') ") or die(mysql_error());

	 	}else
	 		echo "Upload Faild!";
	 }else
	 	echo "The file is not *.torrent!";

}//isset
else
	echo "The file is too large";



?>