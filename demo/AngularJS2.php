<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>

<div ng-app="" ng-init="name={name1:'son', name2:'ha'};points=[1,15,19,2,40]">
<input type="text" ng-model="name.name1">
<p>My first expression: <span ng-bind="name.name1+ ' ' + name.name2 + points [0]"></span></p>
<span ng-bind="name.name1"></span>
<p>The points are {{ points[2] }}</p>
</div>

</body>

</html>
