<?php
 function manualescape($str) {
	$res=str_replace(array( '\'','"',',',';','<','>','-','=',' ',';'),'',$str);
	return $res;
 }
session_start();

$dbh = new mysqli("localhost", "root", "password", "ecommerce1") or die(mysqli_error($dbh));
$sql = "UPDATE `users` SET `password` = :newpass WHERE id = :uid";

$new_password=manualescape($_POST['new-pwd']);
$re_password=manualescape($_POST['re-pwd']);

$user_id= $_SESSION['id'];
$user_pass= $_SESSION['password'];

	if($new_password == $re_password)
	{
		$update_query="UPDATE `users` SET `password` = '$new_password' WHERE id = '$user_id'";
		$update_result=mysqli_query($dbh, $update_query) or die(mysqli_error($dbh));
		$result=false;
		if($result===false){
			echo "<h1>The query statement for defenses did not work properly and therefore password was not updated succesfully</h1>";
			echo "<a href='index.php'><b>Go To Home</b></a>";
		}else if ($result=== true){
			$_SESSION['password']= $new_password;
			echo "Password Updated Successfully<br>";
?>
<a href="index.php"><b>Continue to Shopping.</b></a>
<?php
	}}
	else
	{
		echo "Re-Entered password didn't match the newly entered password.";
	}

?>