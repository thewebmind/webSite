<?php
	session_save_path('sess');
	session_start();
	$_SESSION['lang']= strip_tags(addslashes($_POST['lang']));
?>