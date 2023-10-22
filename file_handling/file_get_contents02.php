<?php
$file = "domain_list.txt";
if(file_exists($file) && is_readable($file) && is_file($file)){
    $data = file_get_contents($file);
    $line = explode("\n", $data);

    foreach($line as $key => $value){
        ++$key;
        print "Line $key: $value\n";
    }
}