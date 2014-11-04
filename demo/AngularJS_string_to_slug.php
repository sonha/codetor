<!DOCTYPE html>
<html ng-app="myApp">
<head>
<!--A simple AngularJS web app that converts text to url format !-->
<script type="text/javascript" src="angular.min.js"></script>
</head>

<body>

<input type="text" ng-model="name">
<p>The points are {{ name|slug}}</p>
</body>
<script>
angular.module('myApp', []).filter('slug', function(){
    return function (input) {
    if(input) {
        return string_to_slug(input);
    }
    }
});
function string_to_slug(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
    console.log(str);

    // remove accents, swap ñ for n, etc
    //var from = "àáäâèắéëêìíïîòóöôùúüûñç·/_,:;";
    var from = "áàảãạăắằẳẵặấầẩẫậéèẻẽẹếềểễệíìỉĩịóòỏõọớờởỡợôốồổỗộúùủũụứừửữựýỳỷỹỵđç·/_,:;";
    var to   = "aaaaaaaaaaaaaaaaeeeeeeeeeeiiiiioooooooooooooooouuuuuuuuuuyyyyydc------";
    //var to   = "aaaaeaeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

    return str;
}
</script>

</html>
