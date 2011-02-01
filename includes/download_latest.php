<div style='padding: 40px;'>
	<?php
		label(0);
		echo "<a href='http://thewebmind.org/downloads/thewebmind-2.0-beta-1.zip' target='hiddenFrame'>download</a>";
		echo '<br/><br/>';
		label(1);
		echo '<br/>';
		label(2);
		echo '<br/>';
		
		$c= (int)file_get_contents('includes/download_counter.php');
		file_put_contents('includes/download_counter.php', ++$c);
	?>
	<a href='http://docs.thewebmind.org' target='_quot'>http://docs.thewebmind.org</a>
</div>
<iframe name='hiddenFrame' src="http://thewebmind.org/downloads/thewebmind-2.0-beta-1.zip" style='display:none;'></iframe>
