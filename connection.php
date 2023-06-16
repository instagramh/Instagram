<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_credential";


$aash = mysqli_connect($servername,$username,$password,$dbname);

if($aash){
    // echo "connection done";
}
else{
    echo "connection failed";
}
?>