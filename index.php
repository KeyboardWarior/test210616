		<?php
		include "includes/connection.php";
		require_once'includes/send.php';

		if(!empty($_POST)){
			save_mes();
		}

		
		?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>web site</title>
		<link href='style.css' rel='stylesheet' type='text/css'/>
		</head>

	<body>
	<div class='header'>
		<img src='icon.png'>
		<header>Guest book</header>
	</div>
	<div class='page'>
		<div class='message_form'>
			<form action="" method="post">
				<input class="msg1" type="text" name="author" placeholder="     Укажите своё имя" required>*
				<br>
				<textarea class="msg2" type="text" name="message" required> </textarea>*
				<input class="button" type="submit" name="submit" value="Отправить"><br>
				<p class='hint'>* - обязательные для заполнения поля</p>
				<input type="hidden" name="date" value="<?php  echo date("Y-m-d, H:i:s")?>">
			</form>
		</div>
		<?php
		$information = mysqli_query($connection, "SELECT * FROM `messages` ORDER BY id DESC;");
		$inf = mysqli_fetch_array($information);
		while ($inf = mysqli_fetch_array($information))
		{
		?>
		<div class='message'>
			<div>
				<div class='author'><h4><?php echo $inf ['author'];?></h4></div><br>
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
		<a href='admin/index.php'>Вход в админ панель</a>
		</div>

	</div>	
	</body>
</html>