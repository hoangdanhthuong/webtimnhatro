<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webnhatro";
// tao ket noi 
$conn = mysqli_connect($servername, $username, $password,$dbname);
//kiem tra ket noi
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

?>