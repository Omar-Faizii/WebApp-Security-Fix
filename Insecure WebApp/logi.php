<?php
$dbh = new mysqli("localhost", "root", "password", "ecommerce1");
if ($dbh->connect_error) {
    die("Connection failed: " . $dbh->connect_error);
}

if (isset($_POST['button'])) {
    $email = $_POST['email']; // Directly using the POST data without escaping
    $password = $_POST['password']; // Directly using the POST data without escaping

    // Vulnerable SQL statement
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $dbh->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $row['password'];

        header("location:index.php");
    } else {
        ?>
        <div style="font-size: 18px;">
            <?php
            echo "<br><br><center>Unable to Login</center><br><br>";
            ?>
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
            <p>
                <a href="index.php"><button class="btn btn-primary">Try Again</button> <br></a> or<br>
                <a href="signup.php"><button class="btn btn-primary">Sign Up</button></a>
            </p>
        </div>
        </body>
        </html>
        <?php
    }
}
?>