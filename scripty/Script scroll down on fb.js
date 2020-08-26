function scrolllll()
{
	var body = document.body,
		html = document.documentElement,
		height = Math.max( body.scrollHeight, body.offsetHeight, 
						   html.clientHeight, html.scrollHeight, html.offsetHeight );

	function scrollWin()
	{
	  window.scrollTo(0,height-1000);	
	}
	
	scrollWin();

}
setInterval(scrolllll,1000);