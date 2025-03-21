<?php ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


</head>
<body>
<?php require 'header_logged_out.php' ?>

<div class="row">
	<div class="container" style="margin-top: 80px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>What is this website</h4>
				</div>
				<div class="panel-body">
					<img src="images\call1.jpg"><br><br>
					<p>A Demonstration for SQL injection Attack</p>


					</div>
				</div>
			</div>


			<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Website Info</h4>
				</div>
				<div class="panel-body">
					
					<p>"Information about the website comes here"</p>




					</div>
				</div>
			</div>







			<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Ways Of Prevention</h4>
				</div>
				<div class="panel-body">
					<h4>SQL Injection:</h4>
					<ol>
						<li>Make Use of Prepared statement</li><br>
						<li>Make Use Of Prepared statement with parameterized queries</li><br>
						<li>Incorporate form input validation</li><br>
						<li>Use Regular expressions</li><br>
						<li>Implement Escaping techniques by either built-in functions or manually crafted ones</li><br>
						<li>Some of the latest approaches are to Query Tokenization</li><br>
					</ol>


					</div>
				</div>
			</div>




		</div>
	</div>
</div>

<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>