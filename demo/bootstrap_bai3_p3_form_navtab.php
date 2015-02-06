<?php 
if(isset($_POST['btnSubmit'])) {
    
    var_dump($_POST['btnSubmit']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="jquery-1.8.3.min.js"></script>
    <title>Editor Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://localhost/codetor/css/docs.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"/></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <link rel="stylesheet" href="<?php echo $baseUrl;?>js/docs.min.js">
</head>
<body>
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">bababa</div>
  <div role="tabpanel" class="tab-pane" id="profile">hahaha</div>
  <div role="tabpanel" class="tab-pane" id="messages">fff</div>
  <div role="tabpanel" class="tab-pane" id="settings">.aaaaaa</div>
</div>


</body>
<script>
  $(function () {
    $('#myTab a:last').tab('show');
  })
</script>
</html>