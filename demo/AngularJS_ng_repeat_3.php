<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>
<div ng-app="" ng-controller="loop">
  <ul>
    <li ng-repeat="x in names">
      {{ x }}
    </li>
  </ul>
  <ul>
    <li ng-repeat="y in points">
      {{ y }}
    </li>
  </ul>
  <ul>
    <li ng-repeat="z in friends">
      {{ z.name }} is {{z.age}} years old
    </li>
  </ul>
<div>

<script>
function loop($scope) {
    $scope.names = ['Jani','Hege','Kai'];
    $scope.friends = [
  {name:'John', age:25, gender:'boy'},
  {name:'Jessie', age:30, gender:'girl'},
  {name:'Johanna', age:28, gender:'girl'},
  {name:'Joy', age:15, gender:'girl'},
  {name:'Mary', age:28, gender:'girl'},
  {name:'Peter', age:95, gender:'boy'},
  {name:'Sebastian', age:50, gender:'boy'},
  {name:'Erika', age:27, gender:'girl'},
  {name:'Patrick', age:40, gender:'boy'},
  {name:'Samantha', age:60, gender:'girl'}
];
     $scope.points = ['1','2','3'];
}
</script>
</body>

</html>
