<table>
	<tr>
		<td style='width:400px;'>
			<h1>
				Videos
			</h1>
			<div class='hseparator'></div>
			<br/>
			<div class='videoBlock'
				 id='shownVideo'>
			</div>
		</td>
		<td style='vertical-align:top;padding-top:22px;'>
			<center>
				<div class='hseparator' style='width:460px;'></div><br/>
				<table class='videoThumbsGrid'>
					<tr>
						<td>
							<div class='video_thumb'
								 onmouseover="this.className= 'video_thumbOver'"
								 onmouseout="this.className= 'video_thumb'"
								 onclick="showVideo('http://www.youtube.com/v/qXq6RS15viI&hl=pt_BR&fs=1&');">
								<img alt="using the programming tool into theWebMind 2.0" src="img/video_print/programming_tool.jpg" title="using the programming tool into theWebMind 2.0"/><br/>
								Using the programming tool into theWebMind 2.0<br/>
							</div>
						</td>
						<td>
							<div class='video_thumb'
								 onmouseover="this.className= 'video_thumbOver'"
								 onmouseout="this.className= 'video_thumb'"
								 onclick="showVideo('http://www.youtube.com/v/qMmCTLn9nl0&hl=pt_BR&fs=1&');">
								<img alt="managing projects in theWebMind 2.0" src="img/video_print/managing.jpg" title="managing projects in theWebMind 2.0"/><br/>
								Managing projects in theWebMind 2.0<br/>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class='video_thumb'
								 onmouseover="this.className= 'video_thumbOver'"
								 onmouseout="this.className= 'video_thumb'"
								 onclick="showVideo('http://www.youtube.com/v/KXHb9628KTs&hl=pt_BR&fs=1&');">
								<img alt="creating a new project in theWebMind 2.0" src="img/video_print/new_project.jpg" title="creating a new project in theWebMind 2.0"/><br/>
								Creating a new project in theWebMind 2.0<br/>
							</div>
						</td>
						<td>
							<div class='video_thumb'
								 onmouseover="this.className= 'video_thumbOver'"
								 onmouseout="this.className= 'video_thumb'"
								 onclick="showVideo('http://www.youtube.com/v/mT-G1UWf5_M&hl=pt_BR&fs=1&');">
								<img alt="Generating code with a choosen module in theWebMind 2.0" src="img/video_print/generating.jpg" title="Generating code with a choosen module in theWebMind 2.0"/><br/>
								Generating code with a choosen module in theWebMind 2.0<br/>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class='video_thumb'
								 onmouseover="this.className= 'video_thumbOver'"
								 onmouseout="this.className= 'video_thumb'"
								 onclick="showVideo('http://www.youtube.com/v/PpAuH__KiMk&hl=pt_BR&fs=1&color1=0x006699&color2=0x54abd6');"/>
								<img src='img/video_print/codding.jpg'
									 title='Codding in WML, into theWebMind 2.0'
									 alt='Codding in WML, into theWebMind 2.0' /><br/>
								Codding in WML, into theWebMind 2.0<br/>
							</div>
						</td>
						<td>
							<br/>
						</td>
					</tr>
				</table>
				<br/>
				<div class='hseparator' style='width:460px;'></div><br/>
			</center>
		</td>
	</tr>
</table>
<script>
	function showVideo(url)
	{
		var str= '<object width="425" height="344">';
			str+= '<param name="movie" value="'+url+'">';
			str+= '</param>';
			str+= '<param name="allowFullScreen" value="true">';
			str+= '</param>';
			str+= '<param name="allowscriptaccess" value="always">';
			str+= '</param>';
			str+= '<embed src="'+url+'"';
			str+= ' type="application/x-shockwave-flash"';
			str+= ' allowscriptaccess="always"';
			str+= ' allowfullscreen="true"';
			str+= ' width="425"';
			str+= ' height="344">';
			str+= '</embed>';
			str+= '</object>';
		document.getElementById('shownVideo').innerHTML= str;
	}
	showVideo('http://www.youtube.com/v/PpAuH__KiMk&hl=pt_BR&fs=1&color1=0x006699&color2=0x54abd6');
</script>