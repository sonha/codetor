<!DOCTYPE html>
<html ng-app="">

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>
<div ng-controller="sonha">
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

<script>
function sonha($scope){
    $scope.names=['Jani','Hege','Kai'];
    $scope.numbers=['1','2','3'];
};
</script>
</body>

</html>
