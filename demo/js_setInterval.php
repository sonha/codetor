<!DOCTYPE html>
<html>
<body>

<p>Click the button to wait 3 seconds, then alert "Hello".</p>
<p>After clicking away the alert box, an new alert box will appear in 3 seconds. This goes on forever...</p>
<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    setInterval(function(){
 alert("Hello"); 
}, 1000);
}
</script>

</body>
</html>

