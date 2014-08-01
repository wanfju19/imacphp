

<?php



include_once("/Users/fujunwang/Documents/weiyunwang/imacphp/_classes/autoload.php");


  

$da = new MySQL2(); 



echo var_dump($da->IsConnected());


var_dump($da->QueryArray("select * from Users"));


echo  "\n---------------------------------------------------\n\n";






echo  "\n\n\n---------------------------------------------------\n\n\n\n\n\n";


exit;

