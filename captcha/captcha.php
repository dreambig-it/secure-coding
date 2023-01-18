<?php
session_start();
$_SESSION['captcha'] = generateRandomString();
header('Content-type: image/png');
$string = $_SESSION['captcha'];

$image = imagecreate(200, 50);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 50, 15, $string, $text_color);
imagepng($image);
imagedestroy($image);

function generateRandomString() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 5; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
