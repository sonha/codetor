<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body>

<div  ng-app="myApp" ng-init="name='sonha'; test='babaa'">
<p>Input something in the input box:</p>
<p>Name: <input type="text" ng-model="name" value="John"></p>
<p>Name: <input type="text" ng-model="test" value="John"></p>
<div class="sonha">{{name|slug}}</div>
<p ng-bind="test"></p>

</div>
<script>
angular.module('myApp',[]).filter('slug', function(){
    return function (input){
        if(input){
            return string_to_slug(input);
        }
    }
});
function string_to_slug(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
    console.log(str);

    // remove accents, swap ñ for n, etc
    var from = "àáäâắèéëêìíïîỉòóöôùúüûñç·/_,:;";
    var to   = "aaaaaeeeeiiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

    return str;
}
</script>
</body>
</html>
