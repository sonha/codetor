<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son
 * Date: 04/11/2014
 * Time: 10:06 SA
 */
header('X-XSS-Protection: 0');
function render($view, $vars)
{
    extract($vars);
    ob_start();
    include($view);
    $content = ob_get_clean();
    return $content;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="jquery-1.8.3.min.js"></script>
    <title>Codeto Editor v1.0</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>