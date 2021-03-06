<html ng-app="myNoteApp">

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>

<div ng-controller="myNoteCtrl">

<h2>My Note</h2>

<p><textarea ng-model="message" cols="40" rows="10"></textarea></p>

<p>
<button ng_click="save()">Save</button>
<button ng-click="clear()">Clear</button>
</p>

<p>Number of characters left: <span ng-bind="left()"></span></p>

</div>

<script>
var app = angular.module("myNoteApp", []);
app.controller("myNoteCtrl", function($scope) {
    $scope.message = "";
    $scope.left  = function() {return 100 - $scope.message.length;};
    $scope.clear = function() {$scope.message = "";};
    $scope.save  = function() {alert("Note Saved");};
});
</script>

</body>
</html>