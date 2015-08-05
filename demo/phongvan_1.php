<?php
//SonHA: coding here


$team = array('A', 'B', 'C', 'D');
$luotdi = array();
$luotve = array();
for($i=0;$i<4;$i++) {
    for($j=$i+1;$j<4;$j++) {
        $luotdi[] = $team[$i].'-'.$team[$j];
        $luotve[] = $team[$j].'-'.$team[$i];
    }
}

var_dump($luotdi);
var_dump($luotve);die;

?>