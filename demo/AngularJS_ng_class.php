<!DOCTYPE html>
<html ng-app="myApp">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<style>
.strike {
text-decoration: line-through;
}
.red {
   color:red; 
}
.bold {
font-weight : bold;
}
.first_style {
 color:red; 
font-weight : bold;
}
.last_style {
text-decoration: line-through;
font-weight : bold;
}
.odd_style {
 color:blue; 
font-weight : bold;
}
.even_style {
 color:blue; 
text-decoration: line-through;
}
</style>
</head>
<body ng-controller="getListController">
<p ng-class="{strike: deleted, bold: important, red: error}">Map Syntax Example</p>
<input type="checkbox" ng-model="deleted"> deleted (apply "strike" class)<br>
<input type="checkbox" ng-model="important"> important (apply "bold" class)<br>
<input type="checkbox" ng-model="error"> error (apply "red" class)
<hr>
<!-- whatever is typed into this input will be used as the class for the div below -->
<p ng-class="style">Using String Syntax</p>
<input type="text" ng-model="style" placeholder="Type: bold strike red">
<hr>
<p ng-class="[mode1, mode2, mode3]">Using Array Syntax</p>
<input ng-model="mode1" placeholder="Type: bold, strike or red"><br>
<input ng-model="mode2" placeholder="Type: bold, strike or red"><br>
<input ng-model="mode3" placeholder="Type: bold, strike or red"><br>
<hr>
<div class="info">
<div class="left" style="float: left;width: 50%;">
  <ol>
    <li ng-repeat="x in names" ng-class="{'strike':x.age<1000 && x.name == 'Randall'}">
      {{x.name}}
    </li>
  </ol>
</div>
<div class="right" style="float: left;width: 50%;">
  <ol>
    <li ng-repeat="x in names" ng-class="{'red':x.age<1000}">
      {{x.name}}
    </li>
  </ol>
</div>
</div>
<hr>
<!--If you are using the ngRepeat directive and you want to apply classes to the first, last, or a 
specific number in the list, you can use special properties of ngRepeat. 
These include $first, $last, $even, $odd, 
and a few others. Here’s an example of how to use these:-->
<div class="info">
<div class="left" style="float: left;width: 25%;">
<ul>
	<li ng-class="{ 'first_style': $first }" ng-repeat="x in names">{{ x.name }}</li>
</ul>
</div>
<div class="center" style="float: left;width: 25%;">
<ul>
	<li ng-class="{ 'last_style': $last }" ng-repeat="x in names">{{ x.name }}</li>
</ul>
</div>
<div class="left" style="float: left;width: 25%;">
<ul>
	<li ng-class="{ 'odd_style': $odd }" ng-repeat="x in names">{{ x.name }}</li>
</ul>
</div>
<div class="sonha" style="float: left;width: 25%;">
<ul>
	<li ng-class="{ 'even_style': $even }" ng-repeat="x in names">{{ x.name }}</li>
</ul>
</div>
</div>
<hr>
<script type="text/javascript">
    var app = angular.module('myApp', []);
    app.controller('getListController', function($scope, $http) {
    getAllMember(); // Load all available tasks
    function getAllMember(){  
    $http.post("demo/data_user_info.php").success(function(data){
            $scope.names = data;
           });
      };
    })
</script>
</body>
</html>
