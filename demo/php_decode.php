<?php
//SonHA: coding here

$string = '{&quot;x1&quot;:&quot;&quot;,&quot;x2&quot;:&quot;&quot;,&quot;y1&quot;:&quot;&quot;,&quot;y2&quot;:&quot;&quot;,&quot;w&quot;:&quot;&quot;,&quot;h&quot;:&quot;&quot;}';
$decode   = htmlspecialchars_decode ($string);
$data = json_decode($decode, true);
var_dump($data);die;





?>