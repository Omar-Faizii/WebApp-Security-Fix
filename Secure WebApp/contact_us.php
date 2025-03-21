<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Store | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


</head>
<body>
<?php require 'header_logged_out.php' ?>

<div class="row" >
	<div class="container" style="margin-top: 80px; padding: 20px; background-color:whitesmoke; border: 3px solid  #bbb ">
	<div class="row-style-login-page-pannel">
		<div class="col-sm-9 col-xs-12">
                    <h2><b><u>SQL Injection</u></b></h2>
			<h4> SQL Injection Analysis</h4>
			<p>The objective of this Project is to provide a detailed analysis of the SQL injection attack conducted as part of a information security learning project.</p>
			<p>A SQL injection attack consists of insertion or “injection” of a SQL query via the input data from the client to the application. A successful SQL injection exploit can read sensitive data from the database, modify database data (Insert/Update/Delete), execute administration operations on the database (such as shutdown the DBMS), recover the content of a given file present on the DBMS file system and in some cases issue commands to the operating system. SQL injection attacks are a type of injection attack, in which SQL commands are injected into data-plane input in order to affect the execution of predefined SQL commands.</p>
			</div>
			<div class="col-sm-3 col-xs-12">
			<img src="images\livesupport.jpg">

			</div>

		</div>
	</div>
</div>





<div class="row">
	<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel" >
		<div class="col-sm-6 col-xs-12" >
                    <h3><b>For Queries Send Us a Response</b></h3>
			<form method="post"  action="cont.php">
				<div class="form-group">
                                    Name:<input type="text" class="form-control" placeholder="name" name="name" >
				</div>

				<div class="form-group">
                                    Email Id:<input type="text" class="form-control" placeholder="Email-id" name="email" >
				</div>

				<div class="form-group">
                                    Message:<textarea rows="4"  class="form-control" placeholder="write your message here" name="message"></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
						</button>

			</form>
			
			</div>
			<div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 4px solid #ccc">
                            <h3><b>Website Information:</b></h3><br>
							<p><br>CREATED BY<br>20K-1757 OMAR FAIZI<br>21K-4759 ZAHHAK TARIQ<br>BCY-6A<br></p>
			</div>

		</div>
	</div>
</div>





<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>