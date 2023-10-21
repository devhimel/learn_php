<?php
$file = "userAvatar.jpg";
if(file_exists($file)) {
    $size = filesize($file);
    $factor = floor((strlen($size) - 1) / 3);
    if($factor > 0){
        $unit = "KMGT";
    }
    $unitSize = $size / pow(1024, $factor);
    $fileSize = sprintf("%.2f ", $unitSize);
    $unit = $unit[$factor - 1] . "B";
    echo $file . " is " . $fileSize . $unit;
}else{
    echo $file . " does not exist";
}