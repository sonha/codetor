<?php
//SonHA: coding here

// Load the stamp and the photo to apply the watermark to
$im = imagecreatefromjpeg('http://blog.oskoui-oskoui.com/images/big_sur.jpg');

// First we create our stamp image manually from GD
$stamp = imagecreatetruecolor(100, 70);
imagefilledrectangle($stamp, 0, 0, 99, 69, 0x0000FF);
imagefilledrectangle($stamp, 9, 9, 90, 60, 0xFFFFFF);
$im = imagecreatefromjpeg('http://blog.oskoui-oskoui.com/images/big_sur.jpg');
imagestring($stamp, 5, 20, 20, 'Copyrignt', 0x0000FF);
imagestring($stamp, 3, 20, 40, '(c) Codetor Tech', 0x0000FF);

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Merge the stamp onto our photo with an opacity of 50%
imagecopymerge($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 50);

// Save the image to file and free memory
imagepng($im, 'photo_stamp.png');
imagedestroy($im);






?>