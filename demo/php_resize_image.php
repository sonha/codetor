<?php
//SonHA: coding here

$name = "http://blog.oskoui-oskoui.com/images/big_sur.jpg";
$myImage = imagecreatefromjpeg($name);
list($width, $height) = getimagesize($name);
$scale = 0.5;
//Create the zoom_out and cropped image
$myImageZoom=imagecreatetruecolor($width*$scale,$height*$scale);
$myImageCrop =  imagecreatetruecolor(2144, 868);
 
// Fill the two images
$b=imagecopyresampled($myImageZoom,$myImage,0,0,0,0,$width*$scale,$height*$scale,$width,$height);
$b=imagecopyresampled($myImageCrop,$myImage,0,0,0,291 ,2144,868,2144,868);	
 
// Save the two images created
$fileName="just_demo_thoi_ma";
imagejpeg( $myImageZoom,"./demo/".$fileName."_zoom_out.jpg" );
imagejpeg( $myImageCrop,"./demo/".$fileName."_crop.jpg" );



?>