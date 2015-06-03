<!DOCTYPE html>
<html>
<body>
<h1>Sender</h1>

<p>Klick on the text below to transmit it to previous page:</p>


<div ><b id="data"  onclick="updateMessage()">Click Me</b></div>

<script type="text/javascript">

function updateMessage() {
	var data = document.getElementById("data").innerHTML;
    document.cookie = "cookie-msg-test=" + data + "; path=/";
    return true;
}

</script>
</body>
</html> 
