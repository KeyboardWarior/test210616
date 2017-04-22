<?php
function save_mes(){

	global $connection;
	

	$author = $_POST['author'];
	$message = $_POST['message'];
	$date = $_POST['date'];
	mysqli_query($connection,"INSERT INTO `messages`(author, text, date) VALUES('$author','$message','$date')");

}
function edit_mes(){

	$id = $_GET['id'];
	$text1 = mysqli_query($connection, "SELECT FROM `messages` WHERE `id` = $id;");
	$text = mysqli_fetch_array($text1);
	}
function delete_mes(){
	$id = $_GET['id'];
	mysqli_query($connection, "DELETE FROM `messages` WHERE `id` = $id;");
	echo $_GET['id'];
}	
