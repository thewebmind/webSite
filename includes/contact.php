<h1>
	<?php label(0); ?>
</h1>
<div class='hseparator'></div><br/>
<?php
	
	if($_POST)
	{
		$_to= 'contact@thewebmind.org';
		//$_to= 'felipenmoura@gmail.com';
		$_title= '[theWebMind.org] - Message from website';
		
		reset($_POST);
		foreach($_POST as $p)
		{
			if(isset($_POST[key($_POST)])){
				$_POST[key($_POST)]= utf8_encode(strip_tags($_POST[key($_POST)], '<b><strong><s><u><sub><sup><i><br>'));
				next($_POST);
			}
		}
		
		if(trim($_POST['userName']) != '' && trim($_POST['userEmail']) != '')
		{
			$to      = $_to;
			$subject = $_title;
			$message = "Message from: ".$_POST['userName'].' < '.$_POST['userEmail'].' ><br>';
			$message.= "Country: ".$_POST['country'].'<br>';
			$message.= "State: ".$_POST['state'].'<br>';
			$message.= "City: ".$_POST['city'].'<br>';
			$message.= '------------------------------------<br>';
			$message.= $_POST['message'];
			$headers = 'From: '.$_POST['userEmail']. "\r\n" .
				'Reply-To: '.$_POST['userEmail']."\r\n" .
				'Content-type: text/html; charset=iso-8859-1' . "\r\n".
				'X-Mailer: PHP/' . phpversion();

			if(!mail($to, $subject, $message, $headers))
			{
				?>
					<center>
						<div class='atention'>
							<img src="img/error.png" align='left'>
							Error when trying to send the message
						</div>
					</center>
					<br/>
					<br/>
					<br/>
				<?php
			}else{
					?>
						<center>
							<div class='atention'>
								<img src="img/message_sent.png" align='left'>
								Message sent. Thanks in advance, we'll answer you as soon as possible.
							</div>
						</center>
						<br/>
						<br/>
						<br/>
					<?php
				 }
		}else{
				echo "There are required fields missing";
			 }
	}
	
	//echo '<pre>'; print_r($_POST); echo '</pre>';
	
?>
<div class='tip'>
	<?php label(1); ?>
	<a href='http://docs.thewebmind.org/index.php?title=FAQ' target='_quot'>FAQs</a>
	<?php label(16); ?>
	<a href='http://docs.thewebmind.org' target='_quot'>docs</a>?
</div>
<div class='tip'>
	<?php label(2); ?><a href='http://thewebmind.org/contribute' target='_quot'>contribute</a>
</div>

<?php label(3); ?>
<a href='http://groups.google.com.br/group/thewebmind' target='_quot'><?php label(17); ?></a>
<?php label(18); ?>
<a href='http://twitter.com/thewebmind'>twitter</a>.
<br/>
<form id='contactForm'
	  action='contact'
	  method='POST'
	  onsubmit="return validateMessage()">
	<center>
		<div class='contactPanel'>
			<table>
				<tr>
					<td>
						<?php label(4); ?>*
					</td>
					<td>
						<input type='text'
							   maxlenght='80'
							   tabindex="1"
							   name='userName'
							   class='contactInput'>
					</td>
					<td rowspan='5'>
						<textarea class='contactTextArea'
								  name='message'
								  tabindex="6"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<?php label(5); ?>*
					</td>
					<td>
						<input type='text'
							   maxlenght='200'
							   tabindex="1"
							   name='userEmail'
							   class='contactInput'>
					</td>
				</tr>
				<tr>
					<td>
						<?php label(6); ?>
					</td>
					<td>
						<input type='text'
							   maxlenght='40'
							   tabindex="3"
							   name='country'
							   class='contactInput'>
					</td>
				</tr>
				<tr>
					<td>
						<?php label(7); ?>
					</td>
					<td>
						<input type='text'
							   maxlenght='40'
							   tabindex="4"
							   name='state'
							   class='contactInput'>
					</td>
				</tr>
				<tr>
					<td>
						<?php label(8); ?>
					</td>
					<td>
						<input type='text'
							   maxlenght='40'
							   tabindex="5"
							   name='city'
							   class='contactInput'>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<?php label(9); ?>
					</td>
					<td>
						<select style='width:100%;'
							   class='contactInput'
							   tabindex="7"
							   name='contactSource'>
							<option>
								<?php label(10); ?>
							</option>
							<option>
								<?php label(11); ?>
							</option>
							<option>
								<?php label(12); ?>
							</option>
							<option>
								<?php label(13); ?>
							</option>
							<option>
								<?php label(14); ?>
							</option>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<input type='submit'
			   class='button'
			   value='<?php label(15); ?>'
			   tabindex="8"/>
	</center>
</form>
<br/>
<br/>
<script>
	function validateMessage()
	{
		var form= document.getElementById('contactForm');
		if(form.userName.value.replace(/ /g, '') == ''
			||
		   form.userEmail.value.replace(/ /g, '') == ''
			||
		   form.message.value.replace(/ /g, '').length < 4)
		{
			alert('** Required fields **\n        - Name\n        - E-mail\n        - Message');
			return false;
		}
		return true;
	}
</script>