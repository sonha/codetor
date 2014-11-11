<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<div ng-app="" ng-controller="person">

First Name: <div><input type="text" ng-model="firstName"></div>
Last Name: <div><input type="text" ng-model="lastName"><br></div>
Age: <div><input type="text" ng-model="age"></div>
<br>
Full Name: {{firstName + " " + lastName}}
<br>
Full Name: {{fullName() | uppercase }}
<br>
Age new : {{test(age)}}
</div>

<script>
function person($scope) {
    $scope.firstName="John",
    $scope.lastName="Doe",
    $scope.age="12",
    
    $scope.fullName = function () {
    return  $scope.firstName + ' '+ $scope.lastName;
    };
    $scope.test  = function(age){
        return age * 10;
    }
}
</script>
</div>

</body>
</html>
