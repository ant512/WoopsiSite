<?php

header('Content-Type: image/png');

$image = new Image();
$image->load($_GET['name']);

$scale = $_GET['scale'];

if ($scale > 0 && $scale <= 100) $image->scale($scale);

$image->output();

class Image {
	var $image;
	
	function load($name) {
		$this->image = imagecreatefrompng($name);
	}
	
	function save($name) {
		imagepng($this->image, $name);
	}
	
	function output() {
		imagepng($this->image);
	}
	
	function getWidth() {
		return imagesx($this->image);
	}
	
	function getHeight() {
		return imagesy($this->image);
	}
	
	function scale($scale) {
		$width = $this->getWidth() * $scale / 100;
		$height = $this->getHeight() * $scale / 100;
		
		$newImg = imagecreatetruecolor($width, $height);
		imagecopyresampled($newImg, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
		$this->image = $newImg;
	}
}
?>