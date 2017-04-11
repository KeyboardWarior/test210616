<?php
function save_mes(){

	global $connection;

	$author = $_POST['author'];
	$message = $_POST['message'];
	$date = $_POST['date'];
	mysqli_query($connection,"INSERT INTO `messages`(author, text, date) VALUES('$author','$message','$date')");
}
