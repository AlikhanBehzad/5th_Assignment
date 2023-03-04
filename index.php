
<?php

ession_start();

?>


<!DOCTYPE html>

<?php
session_start();
?>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="ValueForm.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>
     	<label>User Age</label> 
     	<input type="text" name="uage" placeholder="User Age"><br>
     	<label>Email</label>
     	<input type="text" name="uemil" placeholder="User Email"><br>
     	<label>User Name</label>
     	<input type="text" name="uimage" placeholder="User Image"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
<?php
if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
	echo $_SESSION['login'];
}
	
	session_destroy();

?>