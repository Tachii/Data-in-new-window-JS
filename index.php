<!DOCTYPE html>
<html>
<body>
<h1>Receiver</h1>

<p>Watch the text appear in the text box below as you Click on text in separate window</p>

<form name="receiver">
<input type="text" name="message" size="30" value="" >
</form>

<input type="submit" onclick="window.open('sender.php', 'newwindow', 'width=300, height=250'); return false;">

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
    }
    
}
updateMessage();
</script>
</body>
</html> 
