
<?php
require("connection_pro.php");
?> 
<?php
require("pro.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login page from </title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

	
</head>
<body>
		<div class="box1">
			<h1> Login </h1>
			<form method="POST">
				<table>
						<tr class="table">
							<td >USERNAME :-</td> <td><input type="text"  placeholder="Username" class="input-t" name="Adminname"></td>
						</tr>
						<tr class="table">
							
							<td>PASSWORD :- </td><td><input type="password" placeholder="Password " class="input-t" name="password"></td>
						</tr>
						<tr>
                            
							
						<!-- <td><input type="submit" name="submit" values="submit " class="btn" ></td> -->
							
						</tr>
						
				</table>
				<button name="submit" class="btn">Login</button>
			</form>
			<p> OR  LOGIN WITH SOCIAL </p>
			<div class="ico">
				<a href="https://www.facebook.com/profile.php?id=100010786959601"><ion-icon name="logo-facebook"  class="face"></a></ion-icon>
				<a href="https://web.whatsapp.com/"><ion-icon name="logo-whatsapp" class="what"></a></ion-icon>
				<a href="https://www.instagram.com/kanhaiya101020/"><ion-icon name="logo-instagram" class="insta"></a></ion-icon>
				<a href="https://www.linkedin.com/in/kanhaiya-kumar-213435258/"><ion-icon name="logo-linkedin" class="i"></a></ion-icon>
				<a href="https://www.google.com/search?q=google&oq=google&aqs=chrome..69i57j69i59j69i60l3j69i65l3.1683j0j1&sourceid=chrome&ie=UTF-8"><ion-icon name="logo-google"  class="tw"></a></ion-icon>

		    	<p  class="p">Not register </p>
		    	<a href="sign.php" class="sign">Sign Up </a>
		    </div>
		</div>


</body>
</html>
