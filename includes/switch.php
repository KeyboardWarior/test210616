<?php
require_once "function.php";
if(!empty($_POST)){
save_mes();
}

switch ($_GET['action']){
	case 'edit':
		edit_mes();
		break;	
	
	case 'delete':
		delete_mes();
		break;
}