 <?php
    $con = mysqli_connect("localhost", "root", "", "ecommerce2")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
