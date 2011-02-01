<?php
	//session_destroy();
	
	session_save_path('sess');
	session_start();
	//echo $_SESSION['pqp'];
	//include('deletar.php');

	
	$b= (isset($_GET['p']))? preg_replace('/^http\:\/\//', '', urlencode(strip_tags($_GET['p']))): false;
	if(!$b)
		$b= 'home';
	
	if(isset($_SESSION['lang'])&& trim($_SESSION['lang'])!= '')
	{
		$lang= $_SESSION['lang'];
	}else{
			if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])
				&&
			    (
					strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'pt-br')
					||
					strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'pt')
				)
			  )
			{
				$lang= 'pt';
			}else{
					$lang= 'en';
				 }
		 }
	/*
	$lang= (isset($_SESSION['lang'])&& trim($_SESSION['lang'])!= '')? $_SESSION['lang']: 'en';
	
	if(!$lang || trim($lang) == '')
	{	
		$tmp= @apache_request_headers();
		if(strpos($tmp['Accept-Language'], 'pt-br') >= 0|| strpos($tmp['Accept-Language'], 'pt') >=0)
			$lang= 'pt';
		else
			$lang= 'en';
	}
	*/
	$_SESSION['lang']= $lang;
	
	if(file_exists('languages/'.$lang.'.xml'))
		$language= simplexml_load_file('languages/'.$lang.'.xml');
	else
		$language= simplexml_load_file('languages/en.xml');
	
	//echo '<pre>'; print_r($lang); exit;
	
	function label($i)
	{
		GLOBAL $b;
		GLOBAL $language;
		echo utf8_decode($language->$b->label[$i]);
	}
	
	//exit;
?><html>
	<head>
		<title>
			theWebMind: <?php echo ucwords($b); ?>
		</title>
		<link rel="shortcut icon" href="includes/ico.png" />
		<script src='scripts/jquery.js'></script>
		<script src='scripts/func.js'></script>
		<script src="scripts/jquery.lightbox-0.5.min.js"></script>
		<link type='text/css' rel='stylesheet' href="styles/mind.css" />
		<link type='text/css' rel='stylesheet' href="styles/jquery.lightbox-0.5.css" />
	</head>
	<body leftmargin='0' topmargin='0' rightmargin='0' bottommargin='0'>
		<center>
			<img src='img/wave_top.png' id='wave_top'/>
			<img src='img/wave_bottom.png' id='wave_bottom'/>
			<div id='body'>
				<div id='top'>
					<?php
						include('includes/top.php');
					?>
				</div>
				<div id='header'>
					<?php
						include('includes/header.php');
					?>
				</div>
				<div id='innerBody'>
					<table class='innerBody'>
						<tr>
							<td class='left'>
								<!-- -->
							</td>
							<td class='center'>
								<?php
									if(file_exists('includes/'.$b.'.php'))
									{
										include('includes/'.$b.'.php');
									}else{
											include('includes/home.php');
										 }
								?>
							</td>
							<td class='right'>
								<!-- -->
							</td>
						</tr>
					</table>
				</div>
				<div id='footer'>
					<?php
						include('includes/footer.php');
					?>
				</div>
			</div>
		</center>
	</body>
<html>