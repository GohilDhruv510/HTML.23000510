<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "MIDO";

//create conection 
$con = new mysqli($servername, $username, $password);

// check connection
if ($con->connect_error){
    div("connection faild: " . $com->Connect_error);
}
echo "connection successfully"
?>