<?php
$file = "userAvatar.jpg";
if(file_exists($file)) {
    echo $file . (is_readable($file) ? " is readable" : " is not readable") . "<br>";
    echo $file . (is_writable($file) ? " is writable" : " is not writable") . "<br>";
    echo $file . (is_executable($file) ? " is executable" : " is not executable");
}