<?php
session_start();
include("../../admin/config.php");
if(isset($_POST['email'])&&isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "select *from dangky where email ='".$email."' and matkhau = '".$password."'";
	$result = $conn->query($sql);
	if($result){
		echo $result->num_rows;
		if($result->num_rows>0){
			$row = $result->fetch_assoc();
			$_SESSION['email_web_nha_tro'] = $row['email'];
			echo $_SESSION['email_web_nha_tro'] ;
		}
	}
	
}
?>