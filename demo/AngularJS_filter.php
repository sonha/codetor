<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>

<div ng-app="myApp">
  <div>
    {{ 'World' | greet }}<br>
    {{ 'World' | thank }}
  </div>
</div>

<script>
// declare a module
var myAppModule = angular.module('myApp', []);

// configure the module.
// in this example we will create a greeting filter
myAppModule.filter('greet', function() {
 return function(name) {
    return 'Hello, ' + name + '!';
  };
});

myAppModule.filter('thank', function(){
    return function(name){
        return 'Xin cam on ban ' + name + ' rat nhieu !';
    };
});

/**it('should add Hello to the name', function() {
  expect(element(by.binding("'World' | greet")).getText()).toEqual('Hello, World!');
});
**/
</script> 

</body>
</html>
