<?php 
#confing to db
#server name
$server = 'localhost';
#username (root)
$root = 'root';
#password 
$passord = '';
#db name
$db = 'vmsdb';

#connecting
$con = mysqli_connect($server,$root,$passord,$db);

#check 
if (mysqli_connect_errno()){
    echo "Failed to connect to Mysql:" . mysqli_connect_errno();
}
