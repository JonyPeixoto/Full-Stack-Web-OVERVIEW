<!DOCTYPE html>
<html>
<head>
	<title>JS Angular</title>
</head>
<body>

<div ng-app="myShoppingList" ng-controller="myCtrl">
  <ul>
    <li ng-repeat="x in products">
    {{x}}
    <span ng-click="removeItem($index)">&times;</span>
    </li>
  </ul>
  <input ng-model="item" />
  <button ng-click="addItem()">Add to cart!</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="app.js"></script>
</body>
</html>