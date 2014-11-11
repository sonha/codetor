<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>
<body>
<div class="container">
<div ng-app="invoice1" ng-controller="InvoiceController as invoice">
  <b>Invoice:</b>
  <div>
    Quantity: <input type="number" min="0" ng-model="invoice.qty" required >
  </div>
  <div>
    Costs: <input type="number" min="0" ng-model="invoice.cost" required >
    <select ng-model="invoice.inCurr">
      <option ng-repeat="c in invoice.listCurrency">{{c}}</option>
    </select>
  </div>
  <div>
    <b>Total:</b>
    <span ng-repeat="c in invoice.listCurrency">
      {{invoice.total(c) | currency:c}}
    </span>
    <button class="btn" ng-click="invoice.pay()">Pay</button>
  </div>
</div>
</div>
<script>

var app = angular.module('invoice1', []);
app.controller('InvoiceController', function(){
    this.qty = 1;
    this.cost = 1;
    this.inCurr = 'VND';
    this.listCurrency = ['USD', 'EUR', 'VNY', 'VND'];
    this.usdToForeignRates = {
        USD : 1,
        EUR : 0.74,
        VNY : 6.09,
        VND : 20.00,
    };
    this.total = function total(outCurr) {
        return this.convertCurrency(this.qty * this.cost, this.inCurr, outCurr);
    };
    this.convertCurrency = function converCurrency(amount, inCurr, outCurr) {
        return amount * this.usdToForeignRates[outCurr]/ this.usdToForeignRates[inCurr];
    };
});
</script>
</body>
</html>
