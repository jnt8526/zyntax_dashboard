	<?php 
	include ('Mail.php');
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test Page</title>
	</head>
	<body>
		<?php 
			if(isset($_POST['sndmail'])){

				// sendMail();
				sendMail();

				// $name = $_POST['exampleInputName'];
				// $email = $_POST['exampleInputEmail1'];

				// $mail = new SendMail();
				// $mail->testFunction($name, $email);
			}
		?>
		<h2>HTML Form</h2>
		<form method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="exampleInputEmail1">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputName">Name</label>
				<input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="exampleInputName">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary" name="sndmail">Submit</button>
		</form>

	</body>
	</html>