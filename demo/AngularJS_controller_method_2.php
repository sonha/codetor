<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>


<div ng-app="" ng-controller="costController">

<input type="number" ng-model="quantity">
<input type="number" ng-model="price">

<p>Total = {{ (quantity * price) | currency }}</p>

</div>
<script>
function costController($scope) {
    $scope.quantity=2;
    $scope.price=12000;
}
</script>
</div>

</body>
</html>
