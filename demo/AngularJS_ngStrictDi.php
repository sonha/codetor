<html>
<head>
<title>Trang giới thiệu</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<style>
div[ng-controller] {
margin-bottom: 1em;
-webkit-border-radius: 4px;
border-radius: 4px;
border: 1px solid;
padding: .5em;
}
div[ng-controller^=Good] {
border-color: #d6e9c6;
background-color: #dff0d8;
color: #3c763d;
}
div[ng-controller^=Bad] {
border-color: #ebccd1;
background-color: #f2dede;
color: #a94442;
margin-bottom: 0;
}
</style>
</head>

<body>

<div ng-app="ngAppStrictDemo" ng-strict-di>
<div ng-controller="GoodController1">
    I can add: {{a}} + {{b}} =  {{ a+b }}

    <p>This renders because the controller does not fail to
       instantiate, by using explicit annotation style (see
       script.js for details)
    </p>
</div>

<div ng-controller="GoodController2">
    Name: <input ng-model="name"><br />
    Hello, {{name}}!

    <p>This renders because the controller does not fail to
       instantiate, by using explicit annotation style
       (see script.js for details)
    </p>
</div>

<div ng-controller="BadController">
    I can add: {{a}} + {{b}} =  {{ a+b }}

    <p>The controller could not be instantiated, due to relying
       on automatic function annotations (which are disabled in
       strict mode). As such, the content of this section is not
       interpolated, and there should be an error in your web console.
    </p>
</div>
</div>
<script>
angular.module('ngAppStrictDemo', [])
// BadController will fail to instantiate, due to relying on automatic function annotation,
// rather than an explicit annotation
.controller('BadController', function($scope) {
  $scope.a = 1;
  $scope.b = 2;
})
// Unlike BadController, GoodController1 and GoodController2 will not fail to be instantiated,
// due to using explicit annotations using the array style and $inject property, respectively.
.controller('GoodController1', ['$scope', function($scope) {
  $scope.a = 1;
  $scope.b = 2;
}])
.controller('GoodController2', GoodController2);
function GoodController2($scope) {
  $scope.name = "World";
}
GoodController2.$inject = ['$scope'];
</script>
</body>
</html>
