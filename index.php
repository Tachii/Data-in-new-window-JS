<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>new_file</title>
		<meta name="description" content="">
		<meta name="author" content="tachi">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		

	
	</head>

	<body>
		<h1>Receiver</h1>

		<p>Watch the text appear in the text box below as you Click on text in separate window</p>
		
		<form name="receiver" method="post" action="test.php">
		<input type="text" id="message" name="message" size="30" value="" onchange="clearTimeout(timeout)">
		<input type="submit" />
		</form>
		<br />
		Select Data From list below:<br />
		<input type="submit" onclick="window.open('sender.php', 'newwindow', 'width=300, height=250'); return false; ">
	</body>
	
		<script type="text/javascript">
			function getCookie() {
			    var cname = "cookie-msg-test=";
			    var ca = document.cookie.split(';');
			    var i = 0;
			    var length = ca.length;
			    for (i; i < length; i++) {
			        var c = ca[i];
			        while (c.charAt(0)==' ') c = c.substring(1,c.length);
			        if (c.indexOf(cname) == 0) {
			            return c.substring(cname.length, c.length);
			        }
			    }
			}
			function updateMessage() {
			    var text = getCookie();
			    if(text){
			    	document.forms['receiver'].elements['message'].value = text;
			    	var timeout = setTimeout(updateMessage, 1000);
			    }
			}
		</script>
</html>
