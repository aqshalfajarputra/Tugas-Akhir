<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'db_avi';

	$connect = mysqli_connect($host,$user,$pass,$db);

	if(!$connect){
		echo 'Koneksi DB gagal!';
	}

?>
