<?php
	
	//kezdemenyezunk egy kapcsolatot mysql_connect(server_neve,felhasznalo_nev,jelszo) -el
 	$conn = mysql_connect('localhost','root') or die (msql_error()); //ezt ha hiba van azert tettuk

 	//amikor a kapcsolat letrjott !
 	//ket kapcsolat 

 	mysql_set_charset('utf8', $conn); //beallitsuk a karakter keszletet !

 	//ki kell vallaszuk az adatbazist amiben dolgozunk
 	mysql_select_db('mykelatorrent');


?>