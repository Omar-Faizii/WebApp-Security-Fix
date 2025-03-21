<?php 

	$dbh = new mysqli("localhost", "root", "", "ecommerce2") or die(mysqli_error($dbh));
 	if(isset($_POST['button'])){
		$email=mysqli_real_escape_string($dbh,$_POST['email']);
		$password=mysqli_real_escape_string($dbh,$_POST['password']);
		//using the prepared statements with parameterized query without using PHP Data Object
		$stmt = $dbh->prepare("SELECT * FROM users WHERE email= ? AND password= ?");
	    $stmt->bind_param("ss", $email, $password);
	    $stmt->execute();
	    $row = $stmt->get_result()->fetch_assoc();
		if(isset($row))
		{
				session_start();
			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $row['password'];


			header("location:index.php");
		}
		else
		{
?>

	<div style="font-size: 18px;">
	<?php
	echo "<br><br><center>Unable To Login</center><br><br>";  ?>
	</div>

	<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div align="center" style="font-size: 18px;">
        <form method="POST" action="">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <button type="submit" name="button" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>


	<?php 
}
}

?>

