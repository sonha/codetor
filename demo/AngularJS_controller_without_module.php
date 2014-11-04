<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<html ng-app="">

<head>
<title>Controller without module</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Codeto Demo App</h1>

<blockquote>
  <p>Trường hợp này không cần ng-app </p>
  <footer>Demo  <cite title="Source Title">ng-app</cite></footer>
</blockquote>
<div ng-controller="sonha">
<p>
    <input type="text" ng-model="name">
    <input type="text" ng-model="class">
Toi la {{name}} hoc lop  {{class}}
</p>
</div>
</div>
<script>
function sonha($scope) {
$scope.name = "";
$scope.class = "";
}
</script>
</body>
</html>