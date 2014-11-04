<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<style>
table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
</head>

<body>

<div ng-app="" ng-controller="customersController"> 

<table>
{{names}}
  <tr ng-repeat="result in names | orderBy : 'Country'">
    <td>{{ result.Name | uppercase}}</td>
    <td>{{ result.Country | uppercase }}</td>
  </tr>
</table>

</div>

<script>
function customersController($scope,$http) {
  $http.get("http://www.w3schools.com/website/Customers_JSON.php")
  .success(
  function(response) {
  $scope.names = response;
  }
  );
}
</script>

</body>
</html>
