<?php
/* Description : Converts date/time from Europe/Paris to Asia/Tokyo
   Source      : http://timezonedb.com
   Date        : 23 December, 2011 */
 
$date = '25-12-2011 07:52:12'; // Current time in Europe/Paris
 
// Set system time as UTC
date_default_timezone_set('UTC');
 
// Get Europe/Paris GMT offset
$source = getGmtOffset('Europe/Paris');
 
// Get Asia/Tokyo GMT offset
$target = getGmtOffset('Asia/Tokyo');
 
// Difference
$diff = $target - $source;
 
// Convert date into Unix time
$unix = strtotime($date);
 
// Show date/time in Tokyo
echo date('d-m-Y H:i:s', $unix+$diff);
 
function getGmtOffset($zone){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://api.timezonedb.com/?key=K08L8GSONEWY&zone=' . $zone . '&format=json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($json);
    return (int)$data->gmtOffset;
}
?>