<?php
	$content = @simplexml_load_file("http://search.twitter.com/search.atom?q=from:thewebmind&amp;rpp=1");
	if($content)
	{
		$str= utf8_decode(htmlentities($content->entry[0]->content, ENT_QUOTES, 'UTF-8'));
		$str= preg_replace('/\&amp;apos\;/', "'", $str);
		$str= preg_replace('/\&gt\;/', '>', $str);
		$str= preg_replace('/\&lt\;a/', '<a', $str);
		$str= preg_replace('/\&lt\;\/a/', '</a', $str);
		echo $str;
	}else{
			echo "Falha na conexão com o twitter!";
		 }
?>
