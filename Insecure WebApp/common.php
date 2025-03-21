 <?php
    $con = mysqli_connect("localhost", "root", "", "ecommerce3")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
