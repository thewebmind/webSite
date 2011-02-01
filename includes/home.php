<div id='bodyContent'>
	<h1>
		<?php label(0); ?>
	</h1>
	<div class='hseparator'></div>
	<p>
		<?php label(1); ?>
	</p>
	
	<h1>
		<?php label(2); ?>
	</h1>
	<div class='hseparator'></div>
	<p>
		<center>
			<div class='exampleContainerParent'>
				<div class='exampleContainer'>
					<ol class='example'>
						<li>
							<?php label(3); ?>
						</li>
						<li>
							<?php label(4); ?>
						</li>
						<li>
							<?php label(5); ?>
						</li>
						<li>
							<?php label(6); ?>
						</li>
						<li style='border-bottom:none;'>
							<?php label(7); ?>
						</li>
					</ol>
				</div>
			</div>
		</center>
		<br/>
		<div style='padding-left:20px;'>
			<?php label(8); ?>
		</div>
		<br/><br/>
		<center>
			<table style='width:400px;'
				   align='center'
				   id='outPuts'>
				<tr>
					<td style='border-right:solid 1px #ccd; width:200px;'>
						<center>
							<table align='center' style='width:100%;'>
								<tr onmouseover="this.style.backgroundColor= '#f0f0f0'"
									onmouseout="this.style.backgroundColor= 'transparent';"
									 style='border-bottom:solid 1px #ccd;'>
									<td>
										<a href='img/prints/ddl_<?php echo $_SESSION['lang']; ?>.png' >
											<table>
												<tr>
													<td style='padding-left:20px; padding-top:4px;'>
														<img src='img/ddl.png' /><br/><br/>
													</td>
													<td style='padding-left:6px; padding-right:6px;'>
														<strong>DDL Code</strong><br/><br/>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor= '#f0f0f0'"
									onmouseout="this.style.backgroundColor= 'transparent';"
									style='border-bottom:solid 1px #ccd;'>
									<td>
										<a href='img/prints/dd_<?php echo $_SESSION['lang']; ?>.png' >
											<table>
												<tr>
													<td style='padding-left:20px; padding-top:4px;'>
														<img src='img/data_dictionary.png' /><br/><br/>
													</td>
													<td style='padding-left:6px;'>
														<strong>Data Dictionary<br/>and docs</strong><br/><br/>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor= '#f0f0f0'"
									onmouseout="this.style.backgroundColor= 'transparent';">
									<td>
										<a href='img/prints/codes_<?php echo $_SESSION['lang']; ?>.png' >
											<table>
												<tr>
													<td style='padding-left:20px; padding-top:4px;'>
														<img src='img/classes.png' /><br/><br/>
													</td>
													<td style='padding-left:6px;'>
														<strong>Classes and<br/>Files</strong><br/><br/>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
							</table>
						</center>
					</td>
					<td style='border-left:solid 1px #ccd;'>
						<center>
							<table align='center' style='width:100%;'>
								<tr onmouseover="this.style.backgroundColor= '#f0f0f0'"
									onmouseout="this.style.backgroundColor= 'transparent';"
									style='border-bottom:solid 1px #ccd;'>
									<td style='padding-left:8px; padding-top:4px;'>
										<a href='img/prints/der_<?php echo $_SESSION['lang']; ?>.png' >
											<table>
												<tr>
													<td>
															<img src='img/er_diagram.png' />
														<br/><br/>
													</td>
													<td style='padding-left:6px;'>
															<strong>ER Diagram</strong>
														<br/><br/>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor= '#f0f0f0'"
									onmouseout="this.style.backgroundColor= 'transparent';"
									 style='border-bottom:solid 1px #ccd;'>
									<td>
										<a href='img/prints/tree_<?php echo $_SESSION['lang']; ?>.png' >
											<table>
												<tr>
													<td style='padding-left:8px; padding-top:4px;'>
														<img src='img/structure.png' /><br/><br/>
													</td>
													<td style='padding-left:6px;'>
														<strong>Data<br/>Tree/Structure</strong><br/><br/>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
								<tr onmouseover="this.style.backgroundColor= '#f0f0f0'"
									onmouseout="this.style.backgroundColor= 'transparent';">
									<td>
										<a href='img/prints/plugins_<?php echo $_SESSION['lang']; ?>.png' >
											<table>
												<tr>
													<td style='padding-left:8px; padding-top:4px;'>
														<img src='img/plugin.png' /><br/><br/>
													</td>
													<td style='padding-left:6px;'>
														<strong>Alternative outputs<br/>(plugins)</strong><br/><br/>
													</td>
												</tr>
											</table>
										</a>
									</td>
								</tr>
							</table>
						</center>
					</td>
				</tr>
			</table>
		</center>
		<p>
			<?php label(9); ?>
		</p>
	</p>
	
	<h1>
		<?php label(10); ?>
	</h1>
	<div class='hseparator'></div>
	<p>
		<?php label(11); ?>
	</p>
	<h1>
		<?php label(12); ?>
	</h1>
	<div class='hseparator'></div>
	<p>
		<?php label(13); ?>
	</p>
	<br/>
	<br/>
</div>
<div class='vseparator'></div>
<div id='bodySidePanel'>
	<center>
		<a href='download_latest'>
			<img src='img/mind-download.png' />
		</a>
		<div class='twitter'>
			<p>
				<strong><a href='http://twitter.com/thewebmind'>@thewebmind</a></strong>'s latest tweet
			</p>
			<div class='twitterMessage'>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span id='twitterLastMessage'>
					Loading...
				</span>
			</div>
		</div>
	</center>
	<div>
		<table style='margin-left:20px;'>
			<tr>
				<td style='padding-bottom:10px;'>
					<a href='http://groups.google.com.br/group/thewebmind' target='_quot'>
						<img src='img/group.png' />
					</a>
				</td>
				<td style='padding-bottom:10px; padding-left:6px;'>
					<a href='http://groups.google.com.br/group/thewebmind' target='_quot'>
						<strong>Discussion Group</strong>
					</a>
				</td>
			</tr>
			<tr>
				<td style='padding-bottom:10px;'>
					<a href='http://code.google.com/p/webmind/' target='_quot'>
						<img src='img/codes.png' />
					</a>
				</td>
				<td style='padding-bottom:10px; padding-left:6px;'>
					<a href='http://code.google.com/p/webmind/' target='_quot'>
						<strong>Source Code</strong>
					</a>
				</td>
			</tr>
			<tr>
				<td style='padding-bottom:10px;'>
					<a href='http://thewebmind.org/contribute' target='_quot'>
						<img src='img/contribute.png' />
					</a>
				</td>
				<td style='padding-bottom:10px; padding-left:6px;'>
					<a href='http://thewebmind.org/contribute' target='_quot'>
						<strong>Contribute</strong>
					</a>
				</td>
			</tr>
		</table>
		<h1>
			<?php label(14); ?>
		</h1>
		<div class='hseparator' style='width:420px;'></div>
		<p>
			<center>
				<a href="http://www.uolhost.com.br" target="_blank"><img src="http://uolhost.i.uol.com.br/out/banners/100x100-selo-transparente-claro.gif" alt="UOL HOST hospedagem de sites.  Clique e conheça!" border="0"/></a>
				<a href='http://www.webbureau.com.br/blog/' target='_quot'>
					<img src='img/sponsors/webbureau.png' /></a>
				&nbsp;
				<a href='http://phpsp.org.br/' target='_quot'>
					<img src='img/sponsors/phpsp.png'/></a>
			</center>
		</p>
		<h1>
			<?php label(15); ?>
		</h1>
		<div class='hseparator' style='width:420px;'></div>
		<p>
			<table style='width:100%;'>
				<tr>
					<td>
						<center>
							<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
								<form target="pagseguro" action="https://pagseguro.uol.com.br/security/webpagamentos/webdoacao.aspx" method="post"
									  style='margin: 0px;
											 padding: 0px;
											 padding-left: 3px;'>
									<input type="hidden" name="email_cobranca" value="felipenmoura@gmail.com">
									<input type="hidden" name="moeda" value="BRL">
									<input type="image" src="https://pagseguro.uol.com.br/Security/Imagens/FacaSuaDoacao.gif" name="submit" alt="Pague com PagSeguro - &eacute; r&aacute;pido, gr&aacute;tis e seguro!">
								</form>
							<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
						</center>
					</td>
					<td>
						<center>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
								">
								<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</center>
					</td>
					<td>
						<script type="text/javascript">var addthis_pub="49fb84142693a7d1";</script>
						<a href="http://www.addthis.com/bookmark.php?v=20" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" alt="Bookmark and Share" style="border: 0pt none ;" width="83" height="16"></a><script type="text/javascript" src="http://s7.addthis.com/js/200/addthis_widget.js"></script><!-- AddThis Button END -->
					</td>
				</tr>
			</table>
		</p>
	</div>
</div>
