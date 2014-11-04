<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="jquery-1.8.3.min.js"></script>
    <title>Codeto Demo App Version 1.0 by SonHA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<label for="username">Username</label>
<input type="text" id="username" placeholder="Name Here">
<span id="yourName"></span>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#username').on('keyup', function() {
        $('#yourName').text(this.value);
    });
});
</script>
</body>
</html>
