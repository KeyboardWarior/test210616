<?php
$connection = mysqli_connect('127.0.0.1', 'root','','guestbook');
if($connection == false){
	echo 'Не удалось подключиться к базе!<br>';
	echo mysqli_connect_error();
	exit();
} 

?>
