<?php

DEFINE ('DB_HOSTNAME', 'localhost');
DEFINE ('DB_DATABASE', 'interna5_ceseiva');
DEFINE ('DB_USERNAME', 'interna5_usceseiva');
DEFINE ('DB_PASSWORD', 'Sfjv21#1');


 
 $connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 if(!$connection){
    echo "Nope"; exit;
 }
 
 ?>