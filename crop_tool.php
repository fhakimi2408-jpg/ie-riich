<?php

$srcFile = __DIR__ . '/public/images/ieriich-poster.jpg';
$info = getimagesize($srcFile);
echo "Image dimensions: " . $info[0] . "x" . $info[1] . PHP_EOL;

$im = imagecreatefromjpeg($srcFile);
$width = $info[0];
$height = $info[1];

// The main logo is roughly located between:
// Y: 13% to 30% of total height
// X: 15% to 85% of total width
$cropY = (int)($height * 0.13);
$cropH = (int)($height * 0.165);
$cropX = (int)($width * 0.16);
$cropW = (int)($width * 0.68);

$logo = imagecrop($im, ['x' => $cropX, 'y' => $cropY, 'width' => $cropW, 'height' => $cropH]);
if ($logo !== false) {
    imagepng($logo, __DIR__ . '/public/images/ieriich-logo-cropped.png');
    imagedestroy($logo);
    echo "Successfully generated public/images/ieriich-logo-cropped.png\n";
}

// Also crop the footer logos strip (UPSI, 100 Tahun SITC, META, IERIICH)
// Located roughly at Y: 73% to 80%
$footY = (int)($height * 0.72);
$footH = (int)($height * 0.085);
$footX = (int)($width * 0.12);
$footW = (int)($width * 0.76);

$footLogos = imagecrop($im, ['x' => $footX, 'y' => $footY, 'width' => $footW, 'height' => $footH]);
if ($footLogos !== false) {
    imagepng($footLogos, __DIR__ . '/public/images/institutions-banner.png');
    imagedestroy($footLogos);
    echo "Successfully generated public/images/institutions-banner.png\n";
}

// Also let's extract individual logos if needed:
// 1. UPSI logo: around X: 12% to 28%
$upsiCrop = imagecrop($im, ['x' => (int)($width * 0.13), 'y' => $footY, 'width' => (int)($width * 0.17), 'height' => $footH]);
if ($upsiCrop !== false) {
    imagepng($upsiCrop, __DIR__ . '/public/images/upsi-logo.png');
    imagedestroy($upsiCrop);
    echo "Generated upsi-logo.png\n";
}

// 2. 100 Tahun SITC logo: around X: 30% to 47%
$sitcCrop = imagecrop($im, ['x' => (int)($width * 0.30), 'y' => $footY, 'width' => (int)($width * 0.17), 'height' => $footH]);
if ($sitcCrop !== false) {
    imagepng($sitcCrop, __DIR__ . '/public/images/sitc-100-logo.png');
    imagedestroy($sitcCrop);
    echo "Generated sitc-100-logo.png\n";
}

// 3. META Teknologi logo: around X: 48% to 62%
$metaCrop = imagecrop($im, ['x' => (int)($width * 0.48), 'y' => $footY, 'width' => (int)($width * 0.14), 'height' => $footH]);
if ($metaCrop !== false) {
    imagepng($metaCrop, __DIR__ . '/public/images/meta-teknologi-logo.png');
    imagedestroy($metaCrop);
    echo "Generated meta-teknologi-logo.png\n";
}

imagedestroy($im);
