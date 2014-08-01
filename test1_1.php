
#! /usr/local/php5/php

<?php



include_once("/Users/fujunwang/Documents/weiyunwang/imacphp/_classes/autoload.php");

$da = new MySQL();


echo var_dump($da->IsConnected());


var_dump($da->QueryArray("select * from Users"));


echo  "\n---------------------------------------------------\n\n";







echo  "\n\n\n---------------------------------------------------\n\n\n\n\n\n";


exit;

if ( function_exists('exif_read_data') ) {
    
    echo  "sadf";
    
    
} else {
    
    
    echo "no";
}
