<?php
require_once('Image/QRCode.php');


$text = $_GET['text'];
$qr = new Image_QRCode();
$qr->makeCode($text);

