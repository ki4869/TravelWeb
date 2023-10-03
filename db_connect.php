<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="travel";


$conn = mysqli_connect($servername,$username,$password,$database);



if(!$conn){
    die("we failed to connect".mysqli_connect_error());
}
else{
//    echo "Connection was successfull";
}

?>