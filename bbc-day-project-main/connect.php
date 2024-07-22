<?php
$serverName ="localhost";//supd
$username ="root";
$password ="";
$database ="bbc_db";
$connect = new mysqli($serverName,$username,$password,$database )//reserved word

if($connect == true) { //conditional statement
    echo "successfully connected to the database";
}else{
echo "connection failed";
}
?>
