<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>

<div ng-app="myApp" ng-controller="myCtrl">
First Name: <input type=text ng-model="firstName"><br>
Last Name: <input type=text ng-model="lastName"><br><br>
Full Name: {{firstName + " " + lastName}}
</p>

</div>

<script>

var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
$scope.firstName = "SonHA";
$scope.lastName = "Anh";
});
</script> 

</body>
</html>
