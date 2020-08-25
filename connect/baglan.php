<?php 

try {
	$db=new PDO("mysql:host=localhost;dbname=site",'root','');
	//echo "veritabani baglantisi basarili";
}

catch (PDOException $e) {

	echo $e->getMessage();
}



?>