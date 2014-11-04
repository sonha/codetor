<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<div ng-app="" ng-controller="person">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
Full Name: {{firstName + " " + lastName}}
<br>
Full Name: {{fullName() | uppercase }}
</div>

<script>
function person($scope) {
    $scope.firstName="John",
    $scope.lastName="Doe",
    
    $scope.fullName = function () {
    return  $scope.firstName + ' '+ $scope.lastName;
    }
}
</script>
</div>

</body>
</html>
