<?php
$file = 'domain_list.txt';
if(file_exists($file) && is_readable($file) && is_file($file)){
    $size = readfile($file);
    echo "<br/> File size: ". $size . " bytes";

}