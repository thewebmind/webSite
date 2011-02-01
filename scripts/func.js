var loginFloatVisible= false;
$(document).ready(function (){
	$('#bt_login').bind('mouseover', function(){
		this.style.backgroundPosition= '0px 1px';
	});
	$('#bt_login').bind('mouseout', function(){
		if(!loginFloatVisible)
			this.style.backgroundPosition= '0px -37px';
	});
	$('#bt_login').bind('click', function(){
		if(loginFloatVisible)
		{
			/*loginFloatVisible= false;
			$("#floatLogin").slideUp();
			this.style.backgroundPosition= '0px -37px';*/
		}else{
				loginFloatVisible= true;
				$("#floatLogin").slideDown(function(){
					$("body").bind("click", showHideLogin);
				});
				this.style.backgroundPosition= '0px 1px';
			 }
	});
	$("#header .headerTotal div[menu='1']").bind('mouseover', function(){
		this.style.backgroundPosition= '0px -42px';
	});
	$("#header .headerTotal div[menu='1']").bind('mouseout', function(){
		this.style.backgroundPosition= '0px 0px';
	});
	if(document.getElementById('twitterLastMessage'))
	{
		$('#twitterLastMessage').load('includes/load_twitter.php');
		
        $('#outPuts a').lightBox();
	}
});

function changLanguageTo(l)
{
	$.ajax({
			url: 'choose_lang.php',
			type: 'POST',
			data: 'lang='+l,
			success: function(ret){
				self.location.href= self.location.href;
			}
	});
	/*
	var url= self.location.href;
	url= url.replace(/(\?|&)lang=.+($|\?)/, '');
	url+= (url.indexOf('?')==-1)? '?lang='+l : '&lang='+l;
	self.location.href= url;
	*/
}

function showHideLogin(event)
{
	if(loginFloatVisible){
		var o = event.srcElement || event.target;
		while(o.tagName != 'BODY')
		{
			o= o.parentNode;
			if(o.getAttribute('id') == 'floatLogin')
			{
				break;
			}
		}
		
		if(o.tagName=='BODY')
		{
			$("body").unbind("click", showHideLogin);
			loginFloatVisible= false;
			$("#floatLogin").slideUp();
			document.getElementById('bt_login').style.backgroundPosition= '0px -37px';
		}
	}
}
var imgLogin= new Image();
imgLogin.src= 'img/floating_login.png';