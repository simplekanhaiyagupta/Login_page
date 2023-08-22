<?php
if(isset($_POST['submit'])){
	$query="SELECT * FROM `recode` WHERE `Admin_name`='$_POST[Adminname]' AND `password`='$_POST[password]'";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)==1){
		session_start();
		$_SESSION['AdminLoginId']=$_POST['Adminname'];
		header("location: Logout.php");
	}
	else{
		echo" <script>alert('Invalid user name & password  ');</script> ";
	}
}
?>