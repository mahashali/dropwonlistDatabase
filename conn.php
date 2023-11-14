<?php
/*session_start();*/
$servername = "localhost";
$username = "root";
$password = "";
$database ="alifdoonschool";

//create connection

$conn = mysqli_connect($servername,$username,$password,$database);
//check connectioin
if ($conn) {
	/*echo " Database Connected Successfully";*/
}
else{
	die("connection faild:".mysqli_connect_error());
}

/*echo "<center><h1>STUDENT PROFILE <h1></center>";*/
 ?>