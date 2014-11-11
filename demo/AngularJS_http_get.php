<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>

<div ng-app="" ng-controller="customersController"> 
{{names}}
<ul>
  <li ng-repeat="x in names">
    {{ x.name + ', ' + x.address }}
  </li>
</ul>

</div>
<script>
    function customersController($scope, $http) {
        $http.get("http://localhost/codetor/demo/data_user_info.php")
        .success(function(response){
            $scope.names = response;
        });
    }
</script>

</body>
</html>
