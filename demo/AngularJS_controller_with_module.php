<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<html ng-app="myApp">
<head>
<title>Trang giới thiệu</title>
</head>

<body>

<h1>CSS demo!</h1>
<div ng-controller="sonha">
<p>
    <input type="text" ng-model="name">
    <input type="text" ng-model="class">
Toi la {{name}} hoc lop  {{class}}
</p>
</div>
<script>
var app = angular.module("myApp", []);
app.controller("sonha", function($scope) {
$scope.name = 'Ha Anh Son' ;
$scope.class = 'D07CN1' ;
});
</script>
</body>
</html>