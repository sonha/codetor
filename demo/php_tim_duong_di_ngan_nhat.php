<?php
//set the distance array
$_distArr = array();
$_distArr[1][2] = 1;
$_distArr[1][9] = 12;
$_distArr[1][8] = 1;
$_distArr[2][1] = 1;
$_distArr[2][3] = 2;
$_distArr[3][2] = 2;
$_distArr[3][4] = 1;
$_distArr[4][3] = 1;
$_distArr[4][5] = 4;
$_distArr[5][4] = 4;
$_distArr[5][6] = 5;
$_distArr[5][9] = 20;
$_distArr[6][5] = 5;
$_distArr[6][7] = 8;
$_distArr[7][6] = 8;
$_distArr[7][8] = 10;
$_distArr[8][7] = 10;
$_distArr[8][1] = 1;
$_distArr[9][1] = 12;
$_distArr[9][5] = 20;

//the start and the end
$a = 1;
$b = 5;

//initialize the array for storing
$S = array();//the nearest path with its parent and weight
$Q = array();//the left nodes without the nearest path
foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
$Q[$a] = 0;

//start calculating
while(!empty($Q)){
    $min = array_search(min($Q), $Q);//the most min weight
    if($min == $b) break;
    foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
        $Q[$key] = $Q[$min] + $val;
        $S[$key] = array($min, $Q[$key]);
    }
    unset($Q[$min]);
}

//list the path
$path = array();
$pos = $b;
while($pos != $a){
    $path[] = $pos;
    $pos = $S[$pos][0];
}
$path[] = $a;
$path = array_reverse($path);

//print result
echo "<img src='http://www.you4be.com/dijkstra_algorithm.png'>";
echo "<br />From $a to $b";
echo "<br />The length is ".$S[$b][1];
echo "<br />Path is ".implode('->', $path);