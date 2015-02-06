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
<div class="container">
<form class="form-horizontal">
    <div class="row">
  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Select</label>
      <div class="col-sm-10">
        <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        </div>
    </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">multiple Select</label>
          <div class="col-sm-10">
    <select multiple class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
    </select>
  </div>
    </div>
</div></div>
</form>
</body>
</html>