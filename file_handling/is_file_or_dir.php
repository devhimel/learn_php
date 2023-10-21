<?php
$file = "userAvatar.jpg";
if(file_exists($file)){
    echo $file . (is_file($file) ? " is a file" : " is not a file") . "<br>";
    echo $file . (is_dir($file) ? " is a directory" : " is not a directory") . "<br>";
}