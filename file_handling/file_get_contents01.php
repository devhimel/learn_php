<?php
$file = "domain_list.txt";
if(file_exists($file) && is_readable($file) && is_file($file)){
    $data = file_get_contents($file);
    print $data;
}