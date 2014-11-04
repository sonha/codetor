<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-init="names=['Jani','Hege','Kai'];numbers=['1','2','3']">
  <ul>
    <li ng-repeat="x in names">
      {{ x }}
    </li>
  </ul>
  <ul>
    <li ng-repeat="y in numbers">
      {{ y }}
    </li>
  </ul>
<div>


</body>

</html>
