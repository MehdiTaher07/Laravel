<p>

This method is called long-polling.
 It has long been ditched since it's not scalable 
 and will cause some troubles when your userbase gets big. 
 1000 server requests per second is a big, 
 big, big waste of resource when nothing is even being 
 sent but requested for an update. 
 Try using socket.io + redis or a service like pusher for realtime 
 updates instead of making a long-polling code.
 </br>--------</br>
Interval time is good for realtime,  
but not perfect, because of the load of site. 
The response will always update even  if you send nothing.
</br>--------</br>
I agree with you. The core ajax is heavier than jquery-ajax.
So to improve overall code, use jquery-ajax and increase interval time. And increase count by one in notification, and only get those notifications which user haven't seen. It means the notification status in "unread". But they are not understandable by beginners.
BTW, I made the video to get "EASIEST WAY POSSIBLE", means read the video title, then you shall get it. Also thanks for commenting, if someone professional see this comment "like you", they will understand "what I want to say".
</br>--------</br>
 I understand exactly what you're saying. All I have to say that it's not enough by just calling Interval, It should be a lot of code and technical methods behind these codes. Thanks

</p>
<table width="100%" style="background-color:powderblue;color:white;">
	<tr width="75%">
		<td>Welcome to NotiNoti<td>
		<td width="15%">bell<span style="font-size:24px;color:red;" id="noti_number"></span><td>
	</tr>
</table>
<script type="text/javascript">
 function loadDoc()
	{
  

		  setInterval(function()
		  {
			   var xhttp = new XMLHttpRequest();

			   xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("noti_number").innerHTML = this.responseText;
			    }
			   };
			   xhttp.open("GET", "index.php", true);
			   xhttp.send();
		  },1000);
 	}
 loadDoc();
</script>
<style>
#noti_number{
	color:white;
	background-color:red;
	border-radius:25px;
	padding:5px;
	height:11px;
}
</style>
