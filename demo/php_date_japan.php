<?php
//SonHA: coding here
$date = '2014-11-14 10:21:56';

function date_japan($date) {
    $dy  = date("w", strtotime($date));

    $dys = array("日","月","火","水","木","金","土");
    // var_dump($dyj);die;
    $dyj = $dys[$dy];
      echo date('Y') . '年 ' . date('m') . '月 ' . date('d') . '日' . '(' . $dyj . ')';
    }
    date_japan($date);





?>