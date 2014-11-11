<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>
<body>
    <div id="App1" ng-app="shoppingCart" ng-controller="ShoppingCartController">
        <h1>Your order</h1>
        <div ng-repeat="item in items">
            <span>{{item.product_name}}</span>
            <span>{{item.price | currency}}</span>
            <button ng-click="remove($index);">Remove</button>
        </div>
    </div>

    <div id="App2" ng-app="namesList" ng-controller="NamesController">
        <h1>List of Names</h1>
        <div ng-repeat="_name in names">
            <p>{{_name.username}}</p>
        </div>
    </div>
    <script>
            var shoppingCartModule = angular.module("shoppingCart", [])
            shoppingCartModule.controller("ShoppingCartController",
                function($scope) {
                    $scope.items = [
                        {product_name: "Product 1", price: 50},
                        {product_name: "Product 2", price: 20},
                        {product_name: "Product 3", price: 180}
                    ];
                    $scope.remove = function(index) {
                        $scope.items.splice(index, 1);
                    }
                }
            );
            var namesModule = angular.module("namesList", [])
            namesModule.controller("NamesController",
                function($scope) {
                    $scope.names = [
                        {username: "Nitin"},
                        {username: "Mukesh"}
                    ];
                }
            );
            angular.bootstrap(document.getElementById("App2"),['namesList']);
    </script>
</body>
</html>