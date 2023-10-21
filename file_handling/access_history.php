<?php
$file = "userAvatar.jpg";
if(file_exists($file)) {
    $format = "D d M y g:i A";
    $atime = fileatime($file);
    $mtime = filemtime($file);
    $ctime = filectime($file);
    echo "Last accessed: " . date($format, $atime) . "<br>";
    echo "Last modified: " . date($format, $mtime) . "<br>";
    echo "Last changed: " . date($format, $ctime);
}