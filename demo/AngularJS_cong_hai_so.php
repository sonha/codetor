<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-init="quantity=1;price=5">
Quantity (between 1 and 5):<input type="number" name="quantity" min="1" max="5">
Quantity: <input type="number"   ng-model="quantity">
Costs:    <input type="number" ng-model="price">

Total in dollar: {{ quantity * price }}

</div>


</body>

</html>
