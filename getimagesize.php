<?php 
	$imgfile="a.jpg";
	$imgarr=getimagesize($imgfile);
	$im=imagecreatefromjpeg($imgfile);

	echo "<pre>";
	print_r($imgarr);
	echo "</pre>";
	exit;

	header("content-type:image/jpeg");

	imagejpeg($im);

?>
