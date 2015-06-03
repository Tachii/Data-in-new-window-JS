<!DOCTYPE html>
<html>
<body>
<h1>Sender</h1>

<p>Type into the text box below and watch the text 
   appear automatically in the receiver.</p>


<div ><b id="data"  onclick="updateMessage()">Click this for test 5555</b></div>

<script type="text/javascript">

function updateMessage() {
	var data = document.getElementById("data").innerHTML;
    document.cookie = "cookie-msg-test=" + data + "; path=/";
    return true;
}

</script>
</body>
</html> 
