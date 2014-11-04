<!DOCTYPE html>
<html ng-app="myApp">

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body ng-controller="getListController">
<div >
  <ol>
    <li ng-repeat="x in names">
      {{x.name}}
    </li>
  </ol>
</div>
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
