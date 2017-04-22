<?php
	include "../includes/switch.php";
	require_once'../includes/function.php';
	include "../includes/connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>web site</title>
		<link href='../style.css' rel='stylesheet' type='text/css'/>
		</head>

	<body>
	<div class='header'>
		<img src='../icon.png'>
		<header>Guest book</header>
	</div>
	<div class='page'>
		<div class='message_form'>
			<form action="index.php" method="post">
				<input class="msg1" type="text" name="author" placeholder="     Укажите своё имя" required>*
				<br>
				<textarea class="msg2" type="text" name="message"  required><?php echo $text ?></textarea>*
				<input class="button" type="submit" name="submit" value="Сохранить"><br>
				<p class='hint'>* - обязательные для заполнения поля</p>
				<input type="hidden" name="date" value="<?php  echo date("Y-m-d, H:i:s")?>">
			</form>
		</div>
		<?php
		$information = mysqli_query($connection, "SELECT * FROM `messages`;");
		$inf = mysqli_fetch_array($information);
		while ($inf = mysqli_fetch_assoc($information))
		{
		?>
		<div class='message'>
			<div>
				<div class='author'><h4><?php echo $inf ['author'];?></h4></div><br>
				<a href="index.php?action=edit&id=<?=$inf['id']?>">Редактировать</a>
				<a href="index.php?action=delete&id=<?=$inf['id']?>">Удалить</a>
				<p><?php echo $inf ['text'];?></p>
				<div class='pubdate'>Дата:<?php echo $inf ['date']; ?></div>
			</div>
		</div>
		<?php
		}
		?>
		
		<br>
		<br>
		<div class='footer'>
		-Что-то внизу-
		<a href='../index.php'>Выход</a>
		</div>

	</div>	
	</body>
</html>