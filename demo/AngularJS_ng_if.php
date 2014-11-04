<!DOCTYPE html>
<html ng-app="">

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>

Click me: <input type="checkbox" ng-model="checked" ng-init="checked=true" /><br/>
Show when checked:
<span ng-if="checked" class="animate-if">
  This is removed when the checkbox is unchecked.
</span>

</body>

</html>
