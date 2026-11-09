<?php

$srcFile = __DIR__ . '/public/images/ieriich-poster.jpg';
$im = imagecreatefromjpeg($srcFile);

// Extract just the metallic IERIICH 13 emblem
// X: 165 to 665 (width = 500)
// Y: 145 to 290 (height = 145)
$emblemCrop = imagecrop($im, ['x' => 165, 'y' => 140, 'width' => 500, 'height' => 155]);
if ($emblemCrop !== false) {
    imagepng($emblemCrop, __DIR__ . '/public/images/ieriich-header-emblem.png');
    echo "Created public/images/ieriich-header-emblem.png\n";
}

// Extract the complete typography title block (from IERIICH down to CREATIVITY & HUMANITIES)
// Y: 140 to 490 (height = 350)
// X: 90 to 730 (width = 640)
$fullTitleCrop = imagecrop($im, ['x' => 90, 'y' => 140, 'width' => 640, 'height' => 355]);
if ($fullTitleCrop !== false) {
    imagepng($fullTitleCrop, __DIR__ . '/public/images/ieriich-full-title.png');
    echo "Created public/images/ieriich-full-title.png\n";
}

// Bottom right IERIICH logo:
// X: 500 to 700, Y: 740 to 810
$footerLogoCrop = imagecrop($im, ['x' => 510, 'y' => 745, 'width' => 185, 'height' => 55]);
if ($footerLogoCrop !== false) {
    imagepng($footerLogoCrop, __DIR__ . '/public/images/ieriich-compact-logo.png');
    echo "Created public/images/ieriich-compact-logo.png\n";
}
